/* global Chart, jQuery */
// import validation from 'jquery-validation';

(function ($) {
    var loadQuestions = function (survey) {
        var questions = survey.find('.question').map(function () {
            return {
                title: $(this).find('.title').html(),
                text: $(this).find('.text').html(),
                reply: $(this).find('input[type="radio"]:checked').val(),
                comment: $(this).find('textarea').val()
            };
        }).get();

        return questions;
    };
    var start = function (selector) {
        var survey = $(selector);
        var replies = survey.data('replies');
        var configuration = survey.data('configuration');
        var sections = survey.find('section');
        var questions = loadQuestions(survey);
        var max = (function () {
            var max = 0;
            for (var key in configuration.rating) {
                if (configuration.rating.hasOwnProperty(key)) {
                    var value = parseInt(key);
                    if (value > max) {
                        max = value;
                    }
                }
            }

            return max;
        }());
        var index = -1;
        var count = sections.length;
        var chart = new Chart(document.getElementById('chart'), {
            type: 'radar',
            data: {
                labels: questions.map(function (question, index) {
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
                legend: {
                    display: false
                },
                scale: {
                    ticks: {
                        min: 0,
                        max: max,
                        stepSize: 1
                    }
                }
            }
        });

        var updateReply = function (index, reply) {
            chart.data.datasets[0].data[index] = reply;
            chart.update();
        };

        var showQuestion = function () {
            if (index < count - 1) {
                sections.hide().eq(index).show();
            } else {
                sections.show();
            }
        };

        var prev = function () {
            if (index > 0) {
                index--;
                showQuestion();
            }
        };

        var next = function () {
            $('form').validate({
                showErrors: function () {
                    $('#validation-errors').toggle(this.errorList.length > 0);
                }
            });
            if ($('form').valid()) {
                if (index < count) {
                    index++;
                }
                showQuestion();
            }
        };

        if (replies) {
            replies.forEach(function (reply, index) {
                updateReply(index, reply.value);
            });
        } else {
            survey.find('.survey-prev').on('click', prev);
            survey.find('.survey-next').on('click', next);
            survey.find('input[type="radio"]').on('change', function () {
                var index = $(this).closest('.question').data('index');
                updateReply(index, $(this).val());
            });
            next();
        }
    };

    $(function () {
        start('.survey');
    });
}(jQuery));
