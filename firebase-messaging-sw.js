
importScripts('https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js') ;
importScripts('https://www.gstatic.com/firebasejs/6.2.4/firebase-messaging.js') ;
importScripts('assets/js/firebase/init.js') ;


var messaging = firebase.messaging();

// [START background_handler]
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  var notificationTitle = 'Background Message Title';
  var notificationOptions = {
    body: 'Background Message body.'
	};

  return self.registration.showNotification(notificationTitle,
    notificationOptions);
});
// [END background_handler]
