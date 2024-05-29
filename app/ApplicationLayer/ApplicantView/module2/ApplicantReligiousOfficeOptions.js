var $els = $('.menu a, .menu header');
var count = $els.length;
var grouplength = Math.ceil(count / 3);
var groupNumber = 0;
var i = 1;
$('.menu').css('--count', count + '');
$els.each(function (j) {
    if (i > grouplength) {
        groupNumber++;
        i = 1;
    }
    $(this).attr('data-group', groupNumber);
    i++;
});

$('.menu footer button').on('click', function (e) {
    e.preventDefault();
    $els.each(function (j) {
        $(this).css('--top', $(this)[0].getBoundingClientRect().top + ($(this).attr('data-group') * -15) - 20);
        $(this).css('--delay-in', j * .1 + 's');
        $(this).css('--delay-out', (count - j) * .1 + 's');
    });
    $('.menu').toggleClass('closed');
    e.stopPropagation();
});

// run animation once at beginning for demo
setTimeout(function () {
    $('.menu footer button').click();
    setTimeout(function () {
        $('.menu footer button').click();
    }, (count * 100) + 500);
}, 1000);




var optionInfo = {
    "JAIP Kuantan": "Information about Option 1",
    "JAIP Pekan": "Information about Option 2",
    "JAIP Bentong": "Information about Option 3",
    "JAIP Temerloh": "Information about Option 4"
};

var searchInput = document.getElementById("search");
var optionInfoContainer = document.getElementById("option-info");

searchInput.addEventListener("change", function () {
    var selectedOption = searchInput.value;
    if (optionInfo[selectedOption]) {
        optionInfoContainer.textContent = optionInfo[selectedOption];
    } else {
        optionInfoContainer.textContent = "";
    }
});


