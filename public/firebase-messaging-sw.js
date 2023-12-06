// Scripts for firebase and firebase messaging
importScripts('https://www.gstatic.com/firebasejs/8.2.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/8.2.0/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing the generated c>
var firebaseConfig = {
apiKey: "YOUR_API_KEY",
authDomain: "YOUR_DOMAIN",
projectId: "YOUR_PROJECT",
storageBucket: "YOUR_STORAGE",
messagingSenderId: "MSG_SENDER_ID",
appId: "APP_ID"
};







firebase.initializeApp(firebaseConfig);

// Retrieve firebase messaging
const messaging = firebase.messaging();

messaging.onBackgroundMessage(function(payload) {
console.log('Received background message ', payload);

const notificationTitle = payload.notification.title;
const notificationOptions = {
body: payload.notification.body,
};

self.registration.showNotification(notificationTitle,
notificationOptions);
});


