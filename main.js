window.onload = function() { // when the page loads
    var locationSearch = location.search // looks for the location

    if (locationSearch === '?aboutMe' || locationSearch === '?portfolio'|| locationSearch === '?photography'|| locationSearch === '?map'||locationSearch === '?contactMe') {
        let xmlHttpRequest = new XMLHttpRequest();
        xmlHttpRequest.onreadystatechange = () => {
            if (xmlHttpRequest.readyState === 4 && xmlHttpRequest.status === 200) {
                document.getElementById('body').insertAdjacentHTML('afterbegin', xmlHttpRequest.responseText);

            }
        };

        xmlHttpRequest.open('GET', locationSearch.slice(1)+'.html', true);// this is the html we want to load
        xmlHttpRequest.setRequestHeader('Content-type', 'text/html');
        xmlHttpRequest.send();
    }
    else{
        let xmlHttpRequest = new XMLHttpRequest();
        xmlHttpRequest.onreadystatechange = () => {
            if (xmlHttpRequest.readyState === 4 && xmlHttpRequest.status === 200) {
                document.getElementById('body').insertAdjacentHTML('afterbegin', xmlHttpRequest.responseText);

            }
        };

        xmlHttpRequest.open('GET', 'home.html', true);// this is the html we want to load
        xmlHttpRequest.setRequestHeader('Content-type', 'text/html');
        xmlHttpRequest.send();
    }
};