(function($) {
    var loadSurvey = function(data) {
        var survey = data.survey,
            configuration = survey.configuration,
            rating = configuration.rating,
            questions = survey.questions,
            min = configuration.min || 0,
            max = min + rating.length,
            index = 0,
            answers = data.answers || questions.map(function() {
                return null;
            }),
            count = questions.length,
            chart = new Chart(document.getElementById('chart'), {
                type: 'radar',
                data: {
                    labels: questions.map(function(question, index) {
                        return (index + 1) + '. ' + question.title;
                    }),
                    datasets: [{
                        label: 'Answer',
                        fill: false,
                        backgroundColor: 'red',
                        borderColor: 'blue',
                        pointRadius: 8,
                        data: []
                    }]
                },
                options: {
                    // responsive: false,
                    legend: {
                        display: false,
                    },
                    scale: {
                        ticks: {
                            // display: false,
                            // beginAtZero: true,
                            min: 0,
                            max: max,
                            stepSize: 1
                        }
                    }
                }
            });

        if (data.answers) {
            chart.data.datasets[0].data = data.answers;
            // chart.update(0); // No animation
            chart.update();
        } else {
        $('#survey-title').html(survey.title);

        $('#question-rating').html($('<ol class="list-inline">' + rating.map(function(rating, index) {
            return '<li class="list-inline-item"><label><input type="radio" name="rating" value="' + (min + index) + '"> ' + rating + '</label></li>';
        }).join('') + '</ol>'));

        $('[name="rating"]').on('change', function() {
            $('#next')
                .prop('disabled', !$('[name="rating"]:checked').val());
        });

        var prev = function() {
            if (index > 0) {
                index--;
                showQuestion();
            }
        },
            next = function() {
                if ($('[name="rating"]:checked').val()) {
                    if (index < count) {
                        var value = parseInt($('[name="rating"]:checked').val());
                        $('[name="rating"]').prop('checked', false);
                        answers[index] = value;
                        index++;
                    }
                    showQuestion();
                }
            },

            showQuestion = function() {
                if (index < count) {
                    var question = questions[index];
                    $('#question-title').html((index + 1) + '. ' + (question.title ? question.title : ''));
                    $('#question-text').html(question.text ? question.text : '');
                    $('#next')
                        .toggle(index < count - 1)
                        .prop('disabled', true);
                    if (answers[index] !== null) {
                        $('[name="rating"][value="' + answers[index] + '"]').prop('checked', true);
                        $('#next').prop('disabled', false);
                    }
								}
                chart.data.datasets[0].data = answers.slice(0, index);

                // chart.update(0); // No animation
                chart.update();
                $('#data').val(JSON.stringify(answers, null, 2));
								$('#prev').toggle(index > 0);
								$('#next').toggle(index < count);
                $('#submit').toggle(index >= count);
            };

        $('#prev').on('click', prev);
        $('#next').on('click', next);
            showQuestion();
        }
    }

    window.loadSurvey = loadSurvey;
}(jQuery));
