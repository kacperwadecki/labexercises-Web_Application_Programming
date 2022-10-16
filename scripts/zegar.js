window.onload = () => {

    const zegar = () => {
        var data = new Date();

        var hours = data.getHours();
        var minutes = data.getMinutes();
        var seconds = data.getSeconds();

        var day = data.getDate();
        var month = data.getMonth() + 1;
        var year = data.getFullYear();

        if(hours < 10 ) hours = "0" + hours;
        if(minutes < 10) minutes = "0" + minutes;
        if(seconds < 10) seconds = "0" + seconds;
        if(day < 10) day = "0" + day;
        if(month < 10) month = "0" + month

        document.querySelector('.zegar').innerHTML = hours + ":" + minutes + ":" + seconds;

        document.querySelector('.data').innerHTML = day + "/" + month + "/" + year;

        setTimeout(zegar, 1000);
    }

    zegar();
}