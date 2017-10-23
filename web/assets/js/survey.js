/* global Chart, jQuery */
// import validation from 'jquery-validation';

(function ($) {
    var getConfiguration = function(key, configuration) {
        return (typeof SurveyConfiguration !== 'undefined'
                && SurveyConfiguration
                && typeof SurveyConfiguration[key] !== 'undefined'
                && SurveyConfiguration[key]) ? SurveyConfiguration[key] : configuration;
    };
    var backgroundColors = getConfiguration('backgroundColors', [
        'rgba(0,155,221,0.2)',
        'rgba(155,0,221,0.2)',
        'rgba(0,221,155,0.2)'
    ]);
    var borderColors = getConfiguration('borderColors', [
        '#009BDD',
        '#00DD9B',
        '#9B00DD'
    ]);
    var pointBackgroundColors = getConfiguration('pointBackgroundColors', [
        '#009BDD',
        '#00DD9B',
        '#9B00DD'
    ]);
    var datasetConfig = getConfiguration('datasetConfig', {
        fill: true,
        backgroundColor: backgroundColors[0],
        borderColor: borderColors[0],
        pointRadius: 2,
        pointBorderWidth: 0,
        pointBackgroundColor: pointBackgroundColors[0],
        pointStyle: 'circle',
        data: []
    });
    var getDatasetConfig = function(index, config) {
        index || (index = 0);
        return $.extend({}, datasetConfig, {
            backgroundColor: backgroundColors[index],
            borderColor: borderColors[index],
            pointBackgroundColor: pointBackgroundColors[index],
        }, config);
    };
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
        var index = (function() {
            var index = 0;
            // Get index from url.
            var match = /^#([0-9]+)/.exec(location.hash);
            if (match && match[1]) {
                index = match[1];
            }

            return index - 1;
        }());
        var count = sections.length;
        var chart = new Chart(document.getElementById('chart'), {
            type: 'radar',
            data: {
                labels: questions.map(function (question, index) {
                    return (index + 1) + '. ';
                }),
                datasets: [getDatasetConfig()]
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
                    },
                    gridLines: {
                        color: ['#C00122', '#FECE60', '#7DBA6D', '#22A136', '#FFFFFF']
                    }
                }
            }
        });

        var updateReply = function (index, reply) {
            chart.data.datasets[0].data[index] = reply;
            chart.update();
        };

        var showQuestion = function () {
            var current = sections.hide().eq(index).show();
            if (current.find('.question').length>0) {
                $('#chartinfo-wrapper').show();
                $('#survey-info').hide();
            } else {
                $('#chartinfo-wrapper').hide();
                $('#survey-info').show();
            }
            $(window).scrollTop(0);
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

        if (typeof surveyReplies !== 'undefined') {
            var labels = $('.answer-handle').map(function() {
                return $.trim($(this).parent().text());
            }).get();
            var showReplies = function() {
                var indexes = $('.answer-handle:checked').map(function() {
                    return $(this).data('index');
                }).get();
                $('.reply').each(function() {
                    var index = $(this).data('answer-index');
                    $(this).toggle(indexes.indexOf(index) > -1);
                });

                chart.data.datasets = surveyReplies.filter(function(element, index) {
                    return indexes.indexOf(index) > -1;
                }).map(function (replies, index) {
                    return getDatasetConfig(index, {
                        label: labels[index],
                        data: replies.map(function (reply) {
                            return reply.value;
                        })
                    });
                });
                chart.options.legend.display = true;
                chart.update();
            }

            $('.answer-handle').on('change', showReplies);
            showReplies();
        } else if (replies) {
            replies.forEach(function (reply, index) {
                updateReply(index, reply.value);
            });
        } else {
            survey.find('.survey-prev').on('click', prev);
            survey.find('.survey-next').on('click', next);
            survey.find('input[type="radio"]').on('change', function () {
                var index = $(this).closest('[data-index]').data('index');
                updateReply(index, $(this).val());
            });
            survey.find('input[type="radio"]').each(function () {
                if ($(this).prop('checked')) {
                    var index = $(this).closest('[data-index]').data('index');
                    updateReply(index, $(this).val());
                }
            });
            next();
        }
    };

    $(function () {
        start('.survey');
    });
}(jQuery));
