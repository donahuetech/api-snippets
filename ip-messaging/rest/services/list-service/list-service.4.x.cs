// Download the twilio-csharp library from twilio.com/docs/csharp/install
using System;
using Twilio;

class Example {
    static void Main (string[] args) {
        // Find your Account Sid and Auth Token at twilio.com/user/account
        const string accountSid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        const string authToken = "your_auth_token";

        //List all services
        var client = new TwilioIpMessagingClient(accountSid, authToken);
        ServiceResult result = client.ListServices();

        Console.WriteLine(result);
    }
}