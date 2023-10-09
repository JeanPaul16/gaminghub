const getKeyFromValue = (collection, value) => {
    return Object.keys(collection).find(key => collection[key] === value);
}

const RANDOM_ = (min, max) => {
    min = Math.ceil(min);
    max = Math.floor(max);

    return Math.floor(Math.random() * (max - min + 1)) + min;
}

const verifyOrderDate = () => {
    var currentTime = new Date();
    
    var shiftStart = {
        'wed_fri': new Date(),
        'sat_sun': new Date()
    };

    shiftStart.wed_fri.setHours(14);
    shiftStart.sat_sun.setHours(22);

    var shiftEnd = {
        'wed_fri': new Date(),
        'sat_sun': new Date()
    };

    shiftEnd.wed_fri.setHours(11);
    shiftEnd.sat_sun.setHours(23);

    switch (currentTime.getDay()) {
        case 6:
        case 0:
            if (currentTime.getTime() < shiftStart.sat_sun.getTime() || currentTime.getTime() > shiftEnd.sat_sun.getTime()) {
                return false;
            }
            return true;
        case 3:
        case 4:
        case 5:
            if (currentTime.getTime() < shiftStart.wed_fri || currentTime.getTime() > shiftEnd.wed_fri.getTime()) {
                return false;
            }
            return true;
        default:
            return false;
    }
}

const requestAjaxCall = (params) => {
    return $.ajax({
        type: 'post',
        url: `../server_scripts/${params.file_pointer}.script.php`,
        data: {
            params: params.values
        }
    });
}

const loadCurrentTime = (time) => {
    let hours = time.getHours();
    let minutes = time.getMinutes();

    let am_pm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12;

    minutes = minutes < 10 ? '0' + minutes : minutes;
    let current_time = hours + ':' + minutes + ' ' + am_pm;
    return current_time;
}

const alertTemplate = (template, target, target_class) => {
    $(template).insertBefore($(target));
    setTimeout(() => {
        $(target_class).remove();
    }, 1500);
}