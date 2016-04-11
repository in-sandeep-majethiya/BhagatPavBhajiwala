function initPushwoosh() {
    var pushNotification = window.plugins.pushNotification;
    if (device.platform == "Android")
    {
        registerPushwooshAndroid();
    } else if (device.platform == "iPhone" || device.platform == "iOS")
    {
        registerPushwooshIOS();
    }
}

document.addEventListener('deviceready', onDeviceReady, false);

function onDeviceReady() {
    initPushwoosh();
}
        