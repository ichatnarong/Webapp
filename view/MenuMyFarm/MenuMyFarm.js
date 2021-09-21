$(document).ready(function() {
    set_defaultPage();
    event_MenuMyFarm();
});

function set_defaultPage() {
    let farmName = localStorage.getItem('farmName');
    $(".title-header").text(farmName);
}

function event_MenuMyFarm() {
    $(document).on('click', '.list-group-item', function() {
        localStorage.removeItem('farmName');
    });
}