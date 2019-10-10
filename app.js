//<=-- The core Firebase JS SDK is always required and must be listed first -->
//<script src="https://www.gstatic.com/firebasejs/6.4.0/firebase-app.js"></script>

//<!-- TODO: Add SDKs for Firebase products that you want to use

//     https://firebase.google.com/docs/web/setup#config-web-app -->

  // Your web app's Firebase configuration


  if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('firebase-messaging-sw.js')
            .then(registration => {
                messaging.useServiceWorker(registration);
                console.log('Registration successful, scope is:', registration.scope);
            }).catch(function(err) {
        console.log('Service worker registration failed, error:', err);
       });
      }
  // [START get_messaging_object]
  // Retrieve Firebase Messaging object.
  const messaging = firebase.messaging();

  messaging.usePublicVapidKey('BDEQo4J1m9bngDIATCBDTLLAvVlKDl6As_2nc03Wb-Se9Y-bULtBuL7lm7myMZdQQx9pe4S7Szr-yBoJlfDbvnM');

  messaging.onTokenRefresh(() => {
    messaging.getToken().then((refreshedToken) => {
      console.log('Token refreshed.');
      // Indicate that the new Instance ID token has not yet been sent to the
      // app server.
      setTokenSentToServer(false);
      // Send Instance ID token to app server.
      sendTokenToServer(refreshedToken);
      // [START_EXCLUDE]
      // Display new Instance ID token and clear UI of all previous messages.
      resetUI();
      // [END_EXCLUDE]
    }).catch((err) => {
      console.log('Unable to retrieve refreshed token ', err);
      //showToken('Unable to retrieve refreshed token ', err);
    });
  });

  messaging.onMessage((payload) => {
    console.log('Message received. ', payload);
    // [START_EXCLUDE]
    // Update the UI to include the received message.
   // appendMessage(payload);
    // [END_EXCLUDE]
  });
  // [END receive_message]
  function resetUI() {

    messaging.getToken().then((currentToken) => {
      if (currentToken) {
        sendTokenToServer(currentToken);
        //updateUIForPushEnabled(currentToken);
        console.log(currentToken);
      } else {
        // Show permission request.
        console.log('No Instance ID token available. Request permission to generate one.');
        // Show permission UI.
        //updateUIForPushPermissionRequired();
        setTokenSentToServer(false);
      }
    }).catch((err) => {
      console.log('An error occurred while retrieving token. ', err);
      //showToken('Error retrieving Instance ID token. ', err);
      setTokenSentToServer(false);
    });
    // [END get_token]
  }

  function sendTokenToServer(currentToken) {
    if (!isTokenSentToServer()) {
      console.log('Sending token to server...');
      // TODO(developer): Send the current token to your server.
      setTokenSentToServer(true);
    } else {
      console.log('Token already sent to server so won\'t send it again ' +
          'unless it changes');
    }
  }
  function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') === '1';
  }
  function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? '1' : '0');
  }

  function requestPermission() {
    console.log('Requesting permission...');
    // [START request_permission]
    Notification.requestPermission().then((permission) => {
      if (permission === 'granted') {
        console.log('Notification permission granted.');
        $("#lblNotif").text("Notificaciones Activadas");
        resetUI();
        // [END_EXCLUDE]
      } else {
        if (permission === 'denied' || permission === "default") {
          console.log('Unable to get permission to notify.');
          $("#lblNotif").text("Notificaciones Desactivadas");
          deleteToken();
        }
      }
    });
    // [END request_permission]
  }

  function deleteToken() {
    // Delete Instance ID token.
    // [START delete_token]
    messaging.getToken().then((currentToken) => {
      messaging.deleteToken(currentToken).then(() => {
        console.log('Token deleted.');
        setTokenSentToServer(false);
        // [START_EXCLUDE]
        // Once token is deleted update UI.
        //resetUI();
        // [END_EXCLUDE]
      }).catch((err) => {
        console.log('Unable to delete token. ', err);
      });
      // [END delete_token]
    }).catch((err) => {
      console.log('Error retrieving Instance ID token. ', err);
      //showToken('Error retrieving Instance ID token. ', err);
    });
  }
