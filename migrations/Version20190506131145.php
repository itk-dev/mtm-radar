<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use App\Entity\Question;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190506131145 extends AbstractMigration implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            'mysql' !== $this->connection->getDatabasePlatform()->getName(),
            'Migration can only be executed safely on \'mysql\'.'
        );

        $this->addSql('ALTER TABLE question ADD rank INT NOT NULL');
    }

    public function postUp(Schema $schema): void
    {
        $em = $this->container->get('doctrine.orm.entity_manager');

        // Set rank on questions.
        $questions = $em->getRepository(Question::class)->findBy([], [
          'survey' => 'ASC',
          'id' => 'ASC',
        ]);
        $questionRank = 0;
        $lastSurveyId = null;
        $sql = 'UPDATE question SET rank = :rank WHERE id = :id';
        $statement = $em->getConnection()->prepare($sql);
        foreach ($questions as $question) {
            if ($lastSurveyId !== $question->getSurvey()->getId()) {
                $questionRank = 0;
                $lastSurveyId = $question->getSurvey()->getId();
            }

            $statement->execute([
                'id' => $question->getId(),
                'rank' => $questionRank,
            ]);

            ++$questionRank;
        }
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE question DROP rank');
    }
}
