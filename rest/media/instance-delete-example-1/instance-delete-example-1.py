# Download the Python helper library from twilio.com/docs/python/install
from twilio.rest import TwilioRestClient

# Your Account Sid and Auth Token from twilio.com/user/account
account_sid = "{{ account_sid }}"
auth_token  = "{{ auth_token }}"
client = TwilioRestClient(account_sid, auth_token)

client.messages.get("MM800f449d0399ed014aae2bcc0cc2f2ec").media_list.delete("ME557ce644e5ab84fa21cc21112e22c485")