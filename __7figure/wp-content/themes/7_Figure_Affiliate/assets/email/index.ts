import { Resend } from 'resend';
const resend = new Resend('re_A2sBcgAS_PVTgwDBmCFuF1EGu7Lyhts3s');

(async function() {
  try {
    const data = await resend.emails.send({
      from: 'Acme <success@7figure.affiliatemarketconnect.com>',
      to: ['tevisjohnston@gmail.com'],
      subject: 'Hello World',
      html: '<strong>It works!</strong>'
    });

    console.log(data);
  } catch (error) {
    console.error(error);
  }
})();