# A01 Broken Access Control (BAC)

- <https://el5ateb.notion.site/A01-Broken-Access-Control-BAC-1c42b5dc2189806bb8dbc39370d725fc>

 --------------------------------------------------------
Study vulnerability reports and bug bounty write-ups:

1. Platforms: HackerOne, Bugcrowd, CVE Details.
2. Focus on the methodology used to discover and exploit xxx.
3. Extract patterns, techniques, and tools used by experts.

---------

1. <https://nored0x.github.io/penetration%20testing/writeups-Bug-Bounty-hackrone/#idor>
2. <https://medium.com/@saeidmicro/logic-bug-easy-privilege-escalation-7d3878816395>
3. <https://medium.com/@saeidmicro/logic-bug-easy-privilege-escalation-d12be8946e36>
4. <https://infosecwriteups.com/1-program-4-business-logic-bugs-and-cashing-in-2300-299b42236993>
5. <https://medium.com/@Az3m/idor-checklist-c66133d0802b>
6. <https://medium.com/cyberverse/automating-burp-to-find-idors-2b3dbe9fa0b8>
7. <https://inonst.medium.com/a-deep-dive-on-the-most-critical-api-vulnerability-bola-1342224ec3f2>
8. <https://medium.com/@a0xtrojan/bug-bounty-hunters-checklist-for-business-logic-flaws-325fee8ff73c>

- [[2020] - Missing ownership check on remote wipe endpoint](https://hackerone.com/reports/819807)
- [[2019] - Twitter: IDOR and statistics leakage in Orders](https://hackerone.com/reports/544329)
- [[2019] - Lerhan: Bypassing IDOR protection with URL shorteners](https://blog.detectify.com/2019/07/03/lerhan-bypassing-idor-protection-with-url-shorteners/)
- [Trello bug bounty: The websocket receives data when a public company creates a team visible board](https://hethical.io/trello-bug-bounty-the-websocket-receives-data-when-a-public-company-creates-a-team-visible-board/)
- [Trello bug bounty: Payments informations are sent to the webhook when a team changes its visibility](https://hethical.io/trello-bug-bounty-payments-informations-are-sent-to-the-webhook-when-a-team-changes-its-visibility/)
- [Change any Uber user's password through /rt/users/passwordless-signup - Account Takeover (critical)](https://hackerone.com/reports/143717)
- [Vulnerability in Youtube allowed moving comments from any video to another](https://secgeek.net/youtube-vulnerability/)
- [Twitter Vulnerability Could Delete Credit Cards from Any Twitter Account](https://secgeek.net/twitter-vulnerability/)
- [One Vulnerability allowed deleting comments of any user in all Yahoo sites](https://secgeek.net/yahoo-comments-vulnerability/)
- [Microsoft-careers.com Remote Password Reset](http://yasserali.com/microsoft-careers-com-remote-password-reset/)
- [How I could change your eBay password](http://yasserali.com/how-i-could-change-your-ebay-password/)
- [Hacking Facebook.com/thanks Posting on behalf of your friends!](http://www.anandpraka.sh/2014/11/hacking-facebookcomthanks-posting-on.html)
- [How I got access to millions of [redacted] accounts](https://bitquark.co.uk/blog/2016/02/09/how_i_got_access_to_millions_of_redacted_accounts)
- [All Vimeo Private videos disclosure via Authorization Bypass](https://hackerone.com/reports/137502)
- [Urgent: Attacker can Access Every Data Source on Bime](https://hackerone.com/reports/149907)
- [Downloading password protected / restricted videos](https://hackerone.com/reports/145467)
- [Get organization info base on uuid](https://hackerone.com/reports/151465)
- [How I Exposed your Primary Facebook Email Address (Bug worth $4500)](http://roy-castillo.blogspot.com/2013/07/how-i-exposed-your-primary-facebook.html)
- [DOB disclosed using "Facebook Graph API Reverse Engineering"](https://medium.com/@rajsek/my-3rd-facebook-bounty-hat-trick-chennai-tcs-er-name-listed-in-facebook-hall-of-fame-47f57f2a4f71)
- [Leak of all project names and all user names , even across applications](https://hackerone.com/reports/152696)
- [View liked twits of private account via publish.twitter.com](https://hackerone.com/reports/174721)
- [Facebook Vulnerability - Delete Any Video on Facebook](https://danmelamed.blogspot.com/2017/01/facebook-vulnerability-delete-any-video.html)
- [Hacking Facebook’s Legacy API, Part 1: Making Calls on Behalf of Any User](https://stephensclafani.com/2014/07/08/hacking-facebooks-legacy-api-part-1-making-calls-on-behalf-of-any-user/)
- [Hacking Facebook’s Legacy API, Part 2: Stealing User Sessions](https://stephensclafani.com/2014/07/29/hacking-facebooks-legacy-api-part-2-stealing-user-sessions/)
- [Facebook's Bug - Delete any video from Facebook](https://pranavhivarekar.in/2016/06/23/facebooks-bug-delete-any-video-from-facebook/)
- [Airbnb – Web to App Phone Notification IDOR to view Everyone’s Airbnb Messages](https://buer.haus/2017/03/31/airbnb-web-to-app-phone-notification-idor-to-view-everyones-airbnb-messages/)
- [How I took control of your Twitter account (tweeting, viewing/deleting photos and other media)](http://www.anandpraka.sh/2017/05/how-i-took-control-of-your-twitter.html)
- [IDOR on HackerOne Feedback Review - HackerOne](https://hackerone.com/reports/262661)
- [IDOR to view User Order Information - HackerOne](https://hackerone.com/reports/287789)
- [Generating Access Tokens for any Facebook user.](https://medium.com/bugbountywriteup/how-i-was-able-to-generate-access-tokens-for-any-facebook-user-6b84392d0342)

```markdown
http://incidentsecurity.com/how-spending-our-saturday-hacking-earned-us-20k/
https://appsecure.security/blog/how-i-could-have-hacked-your-uber-account
https://blog.usejournal.com/a-less-known-attack-vector-second-order-idor-attacks-14468009781a
https://daleys.space/writeup/0day/2019/09/09/verizon-leak.html
https://evanricafort.blogspot.com/2019/08/read-other-user-support-tickets-in.html
https://fadhilthomas.github.io/bug-bounty-tokopedia-01-en/
https://footstep.ninja/posts/exploiting-self-xss/
https://footstep.ninja/posts/idor-via-email/
https://footstep.ninja/posts/idor-via-http/
https://footstep.ninja/posts/idor-via-websockets/
https://gauravnarwani.com/priv-esc-highest-admin/
https://georgeosterweil.com/2019-02-20-fbctf-idor/
https://gh0st.cn/archives/2019-10-01/1
https://hailstorm1422.com/linkedin-blind-idor/
https://medium.com/@R0X4R/graphql-idor-leads-to-information-disclosure-175eb560170d
https://medium.com/@Vibhurushi_Chotaliya/idor-payment-fraud-99d330879c0d
https://medium.com/@adeshkolte/full-account-takeover-changing-email-and-password-of-any-user-through-api-parameters-3d527ab27240
https://medium.com/@avinash_/disclosure-of-pending-roles-for-any-facebook-page-ab6e4e219f8e
https://medium.com/@hariharan21/idor-leads-to-project-takeover-548a1bfd4d66
https://medium.com/@kedrisec/publish-tweets-by-any-other-user-6c9d892708e3
https://medium.com/@masonhck357/chains-on-chains-chaining-several-idors-into-account-takeover-part-one-373627f2910f
https://medium.com/@mdhridoy_4607/1st-bounty-story-rewarded-300-idor-bc4e1708e8e0
https://medium.com/@mr_hacker/a-5000-idor-f4268fffcd2e
https://medium.com/@noob.assassin/idor-in-one-plus-leads-to-leak-user-personal-info-e7e07729dc5
https://medium.com/@np20121996/how-was-i-able-to-find-privilege-escalation-b13366b97706
https://medium.com/@pratyush1337/edm0d0-idor-vulnerabilities-95ca8600ee1c
https://medium.com/@pratyush1337/inf0rm-tion-disclosure-via-idor-20f1ba5aa508
https://medium.com/@pratyush1337/inf0rm-tion-disclosure-via-idor-cff5541a9232
https://medium.com/@princechaddha/account-takeover-on-airbnb-acquisition-an-unusual-bug-part-2-45fab11dc407
https://medium.com/@protector47/password-reset-vulnerability-full-account-takeover-insecure-direct-object-reference-c4a9a3ea8268
https://medium.com/@rajasudhakar/how-i-could-delete-facebook-ask-for-recommendations-posts-place-objects-in-comments-b7c9bcdf1c92
https://medium.com/@rohan_x3/edmodo-idor-to-view-private-files-of-any-class-2280676c84b8
https://medium.com/@rupika.luhach/how-i-was-able-to-extract-information-of-other-users-exploiting-idor-9f03aa72dd06
https://medium.com/@saadahmedx/accidental-idor-8987a2728d4
https://medium.com/@saadahmedx/idor-account-takeover-1ff5a2d03b8b
https://medium.com/@sahruldotid/antihack-idor-on-create-submission-ddb3cf40c26b
https://medium.com/@sakyb7/tale-of-account-takeover-sensitive-info-disclosure-broken-access-control-cea0a5e3a1fd
https://medium.com/@swapmaurya20/a-simple-idor-to-account-takeover-88b8a1d2ec24
https://medium.com/@vis_hacker/how-i-was-able-to-pwned-30000-users-webhook-d26dc3420703
https://medium.com/@zseano/easily-leaking-passenger-information-on-an-airline-18f99b22cf95
https://medium.com/a-bugz-life/the-bugs-are-out-there-hiding-in-plain-sight-12d056613ea3
https://medium.com/bugbountywriteup/a-simple-bypass-of-registration-activation-that-lead-to-many-bug-a-story-about-how-my-friend-5df0889f1062
https://medium.com/bugbountywriteup/accidental-idor-that-deleted-admin-account-d51264292b66
https://medium.com/bugbountywriteup/account-takeover-using-idor-and-the-misleading-case-of-error-403-cb42c96ea310
https://medium.com/bugbountywriteup/disclose-private-attachments-in-facebook-messenger-infrastructure-15-000-ae13602aa486
https://medium.com/bugbountywriteup/how-i-gained-access-to-revenue-and-traffic-data-of-thousands-of-shopify-stores-b6fe360cc369
https://medium.com/bugbountywriteup/how-i-unlocked-the-blocked-accounts-545e9b7d7be1
https://medium.com/bugbountywriteup/stories-of-idor-4966369e6d82
https://medium.com/bugbountywriteup/stories-of-idor-part-2-29d313a39e55
https://medium.com/bugbountywriteup/vimeo-livestream-bug-bounty-writeup-13fd208b5f4f
https://medium.com/h4x00r/my-very-first-bug-a-dreaded-dupe-and-then-an-idor-jackpot-d01b69f6fbae
https://philippeharewood.com/download-arexport-files-for-any-public-ar-studio-effect/
https://philippeharewood.com/removing-profile-pictures-for-any-facebook-user/
https://vict0ni.me/changing-userID-leads-to-data-leak/
https://websecblog.com/vulns/google-earth-studio-vulnerability/
https://websecblog.com/vulns/listing-email-addresses-on-google-crisis-map/
https://whitehathaji.blogspot.com/2019/07/paypal-bug-10k-all-secondary-users.html
https://www.amolbaikar.com/determine-users-with-detailed-role-model-on-behalf-of-any-facebook-application/
https://www.amolbaikar.com/disclose-full-admin-list-of-any-facebook-applications/
https://www.indoappsec.in/2019/12/airbnb-steal-earning-of-airbnb-hosts-by.html
https://www.linkedin.com/pulse/hacking-youtube-fun-profit-alexandru-coltuneac/
https://www.rahulr.in/2019/10/idor-to-rce.html?m=1
https://www.tomanthony.co.uk/blog/facebook-bug-confirm-user-identities/
https://ysamm.com/?p=171
https://ysamm.com/?p=240
https://ysamm.com/?p=291
https://ysamm.com/?p=314
https://ysamm.com/?p=60
```

<https://medium.com/@FuzzyyDuck2fa-bypass-by-response-manipulation-f599c2e3341f> => 2fa bypass response manipulation
<https://larebsec.medium.com/verification-bypass-via-mass-assignment-25707e210a42> => mass assign bypasses verification
<https://medium.com/@sharp488/critical-account-takeover-mfa-auth-bypass-due-to-cookie-misconfiguration-3ca7d1672f9d> => wtf?
<https://medium.com/h7w/full-account-takeover-via-password-reset-link-manipulation-840fb9402967> => ATO in reset password
<https://medium.com/@tusharaj98355/1-4m-pii-data-leakage-idor-aee596aef4d9> => IDOR in upload function
<https://medium.com/@a13h1/bypassing-business-logic-via-race-condition-a-500-bounty-bug-273396b17ec4> => race condition
<https://imwaiting18.medium.com/i-sent-1-000-000-requests-to-a-server-dcb6b41d5d7f> => 2fa bypass + rate limit bypass
<https://infosecwriteups.com/bac-idor-how-my-father-credit-card-help-me-to-find-this-access-control-issue-7ff7c1ae463e> => IDOR swapping payment method
<https://prateeksrivastavaa.medium.com/zomatoooo-idor-in-saved-payments-f8c014879741> => IDOR saved payments
<https://medium.com/@pranshux0x/account-takeover-on-8-years-old-public-program-c0c0a30cfdd2> => verification bypass + ATO

-----

1. [IDOR to update folder name of other user](https://hackerone.com/reports/587687)
2. [Metadata leakage via IDOR](https://hackerone.com/reports/762707)
3. [IDOR редактирование любого вишлиста](https://hackerone.com/reports/736065)
4. [IDOR [partners.shopify.com] - User with ONLY Manage apps permission is able to get shops info and staff names from inside](https://hackerone.com/reports/243943)
5. [[app.mavenlink.com] IDOR to view sensitive information](https://hackerone.com/reports/283419)
6. [IDOR in activateFuelCard id allows bulk lookup of driver uuids](https://hackerone.com/reports/254151)
7. [IDOR - Ability to view unlisted products](https://hackerone.com/reports/172545) to [Reverb.com](http://reverb.com/)
8. [IDOR unsubscribe Anyone from NextClouds Newsletters by knowing their Email](https://hackerone.com/reports/230328)
9. [IDOR to Account Takeover on](https://hackerone.com/reports/969223) [https://████/index.html](https://xn--4zhaaa/index.html)
10. [relap.io IDOR](https://hackerone.com/reports/749887) to [Mail.ru](http://mail.ru/)
11. [IDOR of contracts on dictor.mail.ru](https://hackerone.com/reports/923851) to [Mail.ru](http://mail.ru/)
12. [[www.zomato.com] IDOR - Delete/Deactivate any special menu of any Restaurants from Zomato](https://hackerone.com/reports/264919) to Zomato - 16 upvotes, $100
13. [IDOR Vulnerability in Job Preferences](https://hackerone.com/reports/827158) to Glassdoor - 16 upvotes, $100
14. [IDOR - Access to private video thumbnails even if video requires password authentication](https://hackerone.com/reports/197114) to YouPorn - 15 upvotes, $1000
15. [IDOR on partners.uber.com allows for a driver to override administrator documents](https://hackerone.com/reports/194594) to Uber - 15 upvotes, $500
16. [idor leads to leak order information](https://hackerone.com/reports/791289) to [Mail.ru](http://mail.ru/) - 15 upvotes, $150
17. [IDOR in merchant.rbmonkey.com allows deleting eShops of another user](https://hackerone.com/reports/281296) to RBKmoney - 15 upvotes, $0
18. ['cnvID' parameter vulnerable to Insecure Direct Object References](https://hackerone.com/reports/265284) to concrete5 - 15 upvotes, $0
19. [[NR Alerts/Synthetics] IDOR through /policies.json with Synthetics exposes full name of other NR users](https://hackerone.com/reports/419875) to New Relic - 14
20. [IDOR - Leaking other user's folder names from /appsuite/api/import?action=ICA](https://hackerone.com/reports/199281) to Open-Xchange - 14 upvotes, $300
21. [IDOR allow to extract all registered email](https://hackerone.com/reports/302485) to Open-Xchange - 14 upvotes, $300
22. [IDOR - Folder names disclosure inside a domain, regardless of user](https://hackerone.com/reports/194574) to Open-Xchange - 14 upvotes, $250
23. [IDOR on mcs.mail.ru](https://hackerone.com/reports/312555) to [Mail.ru](http://mail.ru/) - 14 upvotes, $150
24. [IDOR at 'media_code' when addings media to questions](https://hackerone.com/reports/915133) to Automattic - 14 upvotes, $150
25. [[www.zomato.com] IDOR - Gold Subscription Details, Able to view "Membership ID" and "Validity Details" of other Users](https://hackerone.com/reports/344145) to
26. [Singapore - IDOR in campaign.starbucks.com.sg](https://hackerone.com/reports/783332) to Starbucks - 14 upvotes, $0
27. [IDOR - setAttribute action of user object in API](https://hackerone.com/reports/285432) to Open-Xchange - 13 upvotes, $400
28. [IDOR - Deleting other user's reminders just by id](https://hackerone.com/reports/198969) to Open-Xchange - 13 upvotes, $300
29. [Comment restriction in subsection "Workshop" of domain "steamcommunity.com" can be bypassed using IDOR](https://hackerone.com/reports/365504) to Valve - 13
30. [IDOR on DoD Website exposes FTP users and passes linked to all accounts!](https://hackerone.com/reports/228383) to U.S. Dept Of Defense - 13 upvotes, $0
31. [IDOR on notes to HTML injection](https://hackerone.com/reports/914331) to Palo Alto Software - 13 upvotes, $0
32. [[Razer Pay Mobile App] IDOR within /v1_IM/friends/queryDrawRedLog allowed unauthorised access to read logs](https://hackerone.com/reports/754044) to Razer - 12
33. [IDOR to view other user folder name](https://hackerone.com/reports/333767) to Open-Xchange - 12 upvotes, $250
34. [[www.zomato.com] IDOR - Delete/Deactivate ANY/ALL Promos through a Post Request at **clients/promoDataHandler.php**](https://hackerone.com/reports/264754) to
35. [View & add to cart unlisted items via IDOR](https://hackerone.com/reports/344284) to Instacart - 11 upvotes, $100
36. [IDOR- Activate Mopub on different organizations- steal api token- Fabric.io](https://hackerone.com/reports/95552) to Twitter - 10 upvotes, $5040
37. [Vimeo.com Insecure Direct Object References Reset Password](https://hackerone.com/reports/42587) to Vimeo - 10 upvotes, $5000
38. [India - An Insecure Direct Object Reference (IDOR) allowed unauthorized access to view card index number and monetary](https://hackerone.com/reports/701160)
39. [IDOR in tender.mail.ru leading to Information Disclosure](https://hackerone.com/reports/226640) to [Mail.ru](http://mail.ru/) - 10 upvotes, $0
40. [IDOR exposes receipts of all users.](https://hackerone.com/reports/283407) to RecargaPay - 10 upvotes, $0
41. [IDOR + Account Takeover [UNAUTHENTICATED]](https://hackerone.com/reports/1004750) to U.S. Dept Of Defense - 10 upvotes, $0
42. [[](https://hackerone.com/reports/746513)https://city-mobil.ru/taxiserv] IDOR leads to information disclosure to [Mail.ru](http://mail.ru/) - 9 upvotes, $1500
43. [IDOR expire other user sessions](https://hackerone.com/reports/56511) to Shopify - 9 upvotes, $1000
44. [IDOR zakazaka (состояние заказа и перезаказ)](https://hackerone.com/reports/956799) to [Mail.ru](http://mail.ru/) - 9 upvotes, $150
45. [IDOR create accounts and verify them with original account email](https://hackerone.com/reports/244636) to WakaTime - 8 upvotes, $0
46. [IDOR on update user preferences](https://hackerone.com/reports/854290) to Palo Alto Software - 8 upvotes, $0
47. [IDOR at](https://hackerone.com/reports/1073420) <https://fast.trychameleon.com/observe/v2/profiles/> via uid parameter discloses users' PII data to Topcoder -
48. [IDOR on stocky application-Low Stock-Varient-Settings-Columns](https://hackerone.com/reports/853130) to Shopify - 7 upvotes, $750
49. [[upload-X.my.mail.ru] /uploadphoto Insecure Direct Object References](https://hackerone.com/reports/140548) to [Mail.ru](http://mail.ru/) - 7 upvotes, $160
50. [Insecure direct object reference vulnerability on a DoD website](https://hackerone.com/reports/184933) to U.S. Dept Of Defense - 7 upvotes, $0
51. [Insecure Direct Object Reference (IDOR) vulnerability in a DoD website](https://hackerone.com/reports/207099) to U.S. Dept Of Defense - 7 upvotes, $0
52. [IDOR leads to Leakage an ██████████ Login Information](https://hackerone.com/reports/1093908) to U.S. Dept Of Defense - 7 upvotes, $0
53. [IDOR on](https://hackerone.com/reports/1048540) [https://██████](https://xn--4zhaaaaa/) via POST UID enables database scraping to U.S. Dept Of Defense - 7 upvotes, $0
54. [[city-mobil.ru/taxiserv/] IDOR leads to driver account takeover](https://hackerone.com/reports/751281) to [Mail.ru](http://mail.ru/) - 6 upvotes, $8000
55. [IDOR allows accounts to view full name of other accounts based on email through share notes feature](https://hackerone.com/reports/476958) to New Relic - 6
56. [[c-api.city-mobil.ru] IDOR chat messages between driver and customer](https://hackerone.com/reports/850637) to [Mail.ru](http://mail.ru/) - 6 upvotes, $150
57. [IDOR - Disable sharing](https://hackerone.com/reports/153905) to Nextcloud - 6 upvotes, $100
58. [IDOR in treat subscriptions](https://hackerone.com/reports/313050) to Zomato - 6 upvotes, $100
59. [Full Account Take-Over of ████████ Members via IDOR](https://hackerone.com/reports/847452) to U.S. Dept Of Defense - 6 upvotes, $0
60. [Insecure Direct Object Reference on badoo.com](https://hackerone.com/reports/126861) to Bumble - 5 upvotes, $0
61. [[auto.mail.ru] IDOR на редактирование поста любого юзера.](https://hackerone.com/reports/651966) to [Mail.ru](http://mail.ru/) - 5 upvotes, $0
62. [Insecure Direct Object Reference vulnerability](https://hackerone.com/reports/46397) to HackerOne - 4 upvotes, $500
63. [Insecure Direct Object Reference - access to other user/group DM's](https://hackerone.com/reports/53858) to Twitter - 4 upvotes, $420
64. [IDOR on](https://hackerone.com/reports/34728) <https://www.eobot.com/paypal> to Eobot - 4 upvotes, $0
65. [Generating Unlimited Free Travel Gift Invites | IDOR](https://hackerone.com/reports/49499) to Airbnb - 4 upvotes, $0
66. [IDOR: Adding Contacts to Other User Groups](https://hackerone.com/reports/879960) to 8x8 - 4 upvotes, $0
67. [Idor for firstpromoter service](https://hackerone.com/reports/959697) to Dropcontact - 4 upvotes, $0
68. [View another user information with IDOR vulnerability](https://hackerone.com/reports/1004745) to U.S. Dept Of Defense - 4 upvotes, $0
69. [Insecure direct object reference - have access to deleted DM's](https://hackerone.com/reports/52646) to Twitter - 3 upvotes, $420
70. [Critical IDOR - Get venue data of any organization remotely](https://hackerone.com/reports/120305) to Veris - 3 upvotes, $0
71. [Critical IDOR - Can select any Parent while creating new Venue](https://hackerone.com/reports/120312) to Veris - 3 upvotes, $0
72. [Critical IDOR - Make Rule for Any Group & Any Venue remotely](https://hackerone.com/reports/120318) to Veris - 3 upvotes, $0
73. [Critical IDOR - Get Rules of any organization remotely](https://hackerone.com/reports/120314) to Veris - 3 upvotes, $0
74. [Critical IDOR - Get anyone's Terminal Data remotely](https://hackerone.com/reports/120289) to Veris - 3 upvotes, $0
75. [Critical IDOR - Set anyone's Terminal Data remotely](https://hackerone.com/reports/120291) to Veris - 3 upvotes, $0
76. [Critical IDOR - Get Authentication Details of any Terminal/Gatekeeper](https://hackerone.com/reports/120293) to Veris - 3 upvotes, $0
77. [Critical IDOR - Delete any terminal/gatekeeper of any organization remotely](https://hackerone.com/reports/120288) to Veris - 3 upvotes, $0
78. [Critical IDOR - Delete any rule of any organization remotely](https://hackerone.com/reports/120126) to Veris - 3 upvotes, $0
79. [Critical IDOR - Delete any venue of any organization remotely](https://hackerone.com/reports/120123) to Veris - 3 upvotes, $0
80. [Critical IDOR - Delete any group of any organization remotely](https://hackerone.com/reports/120121) to Veris - 3 upvotes, $0
81. [Critical - Insecure Direct Object Reference - Deleting any member of any organization remotely](https://hackerone.com/reports/120115) to Veris - 3 upvotes, $0
82. [IDOR spam anyone's cellphone number through Cuvva app link](https://hackerone.com/reports/232562) to Cuvva - 3 upvotes, $0
83. [Insecure Direct Object Reference on API without API key](https://hackerone.com/reports/284963) to Semrush - 3 upvotes, $0
84. [Insecure Direct Object Reference on in-scope .mil website](https://hackerone.com/reports/230026) to U.S. Dept Of Defense - 3 upvotes, $0
85. [idor on upload profile functionality](https://hackerone.com/reports/741683) to U.S. Dept Of Defense - 3 upvotes, $0
86. [information disclosure via IDOR on "](https://hackerone.com/reports/763258)[https://target.my.com/api/v2/coverage/segment.json?id={id}](https://target.my.com/api/v2/coverage/segment.json?id=%7Bid%7D)" endpoint to [Mail.ru](http://mail.ru/) - 3
87. [IDOR - User is able to download charts/dashboards from cross accounts](https://hackerone.com/reports/975749) to New Relic - 3 upvotes, $0
88. [Insecure Direct Object References in](https://hackerone.com/reports/52176) <https://vimeo.com/forums> to Vimeo - 2 upvotes, $500
89. [CRITICAL vulnerability - Insecure Direct Object Reference - Unauthorized access to `Videos` of Channel whose privacy is set](https://hackerone.com/reports/45960)
90. [IDOR on remoing Share](https://hackerone.com/reports/85720) to Enter - 2 upvotes, $250
91. [Insecure Direct Object References that allows to read any comment (even if it should be private)](https://hackerone.com/reports/52181) to Vimeo - 2 upvotes, $150
92. [IDOR позволяет изменить информацию о пользователе.](https://hackerone.com/reports/708182) to [Mail.ru](http://mail.ru/) - 2 upvotes, $0
93. [IDOR in locid parameter allowing to view others accounts Profile Locations](https://hackerone.com/reports/966949) to Yelp - 1 upvotes, $0
94. <https://github.com/0xKourama/hackerone-reports/blob/master/README.md>
95. <https://hackerone.com/reports/833735>
96. <https://hackerone.com/reports/152080>
97. [https://medium.com/@aysebilgegunduz/everything-you-need-to-know-about-idor-insecure-direct-object-references-](https://medium.com/@aysebilgegunduz/everything-you-need-to-know-about-idor-insecure-direct-object-references-375f83e03a87)
98. <https://aon.com/cyber-solutions/aon_cyber_labs/finding-more-idors-tips-and-tricks/>
99. <https://github.com/KathanP19/HowToHunt/blob/master/IDOR/IDOR-Old.md>
100. <https://bugbountyhunter.com/vulnerability/?type=idor>
101. [https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/05-](https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/05-Authorization_Testing/04-Testing_for_Insecure_Direct_Object_References.html)
102. <https://medium.com/@BrownBearSec/what-i-learnt-from-reading-220-idor-bug-reports-6efbea44db7>
103. <https://cheatsheetseries.owasp.org/cheatsheets/Insecure_Direct_Object_Reference_Prevention_Cheat_Sheet.html>
104. <https://vickieli.medium.com/how-to-find-more-idors-ae2db67c9489>
105. [https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-](https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/05-Authorization_Testing/)
106. <https://mokhansec.medium.com/full-account-takeover-worth-1000-think-out-of-the-box-808f0bdd8ac7>
107. <https://infosecwriteups.com/all-about-getting-first-bounty-with-idor-849db2828c8>
108. <https://infosecwriteups.com/idor-that-allowed-me-to-takeover-any-users-account-129e55871d8>
109. <https://betterprogramming.pub/all-about-idor-attacks-64c4203b518e>
110. <https://amineaboud.medium.com/access-developer-tasks-list-of-any-of-facebook-application-graphql-idor-62307c5e5b34>
111. [https://hethical.io/trello-bug-bounty-the-websocket-receives-data-when-a-public-company-creates-a-team-visible-](https://hethical.io/trello-bug-bounty-the-websocket-receives-data-when-a-public-company-creates-a-team-visible-board/)
112. <https://hackerone.com/reports/143717>
113. <https://secgeek.net/youtube-vulnerability/>
114. <https://secgeek.net/twitter-vulnerability/>
115. <https://secgeek.net/yahoo-comments-vulnerability/>
116. <http://yasserali.com/how-i-could-change-your-ebay-password/>
117. <https://duo.com/blog/duo-security-researchers-uncover-bypass-of-paypal-s-two-factor-authentication>
118. <http://www.anandpraka.sh/2014/11/hacking-facebookcomthanks-posting-on.html>
119. <https://bitquark.co.uk/blog/2016/02/09/how_i_got_access_to_millions_of_redacted_accounts>
120. <https://hackerone.com/reports/137502>
121. [*IDOR in HackerOne](https://n1ghtmar3.medium.com/how-i-found-my-first-idor-in-hackerone-5d5f17bb431) (Medium)**
122. [*IDOR with Geolocation data not stripped from images](https://hackerone.com/reports/906907) (h1)**
123. [*IDOR in HackerOne](https://n1ghtmar3.medium.com/how-i-found-my-first-idor-in-hackerone-5d5f17bb431) (Medium)**
124. [*](https://hackerone.com/reports/287789)<https://hackerone.com/reports/287789>**
125. *<https://appsecure.security/blog/how-i-could-have-hacked-your-uber-account>**
126. [*](https://footstep.ninja/posts/idor-via-websockets/)<https://footstep.ninja/posts/idor-via-websockets/>**
127. [*](https://georgeosterweil.com/2019-02-20-fbctf-idor/)<https://georgeosterweil.com/2019-02-20-fbctf-idor/>**
128. [**Disclosing privately shared gaming clips of any user**](https://bugreader.com/rony@disclosing-privately-shared-gaming-clips-of-any-user-128)
129. [**Adding anyone including non-friend and blocked people as co-host in personal event!**](https://bugreader.com/binit@adding-anyone-including-non-friend-and-blocked-people-as-co-host-in-personal-event-181)
130. [**Page analyst could view job application details**](https://bugreader.com/rony@page-analyst-could-view-job-application-details-213)
131. [**Deleting Anyone's Video Poll**](https://bugreader.com/testgrounds@deleting-anyones-video-poll-175)
132. [**IDOR bug to See hidden slowvote of any user even when you dont have access right**](https://hackerone.com/reports/661978)
133. [**IDOR allow to extract all registered email**](https://hackerone.com/reports/302485)
134. [**Another image removal vulnerability on Facebook**](https://blog.darabi.me/2020/06/image-removal-vulnerability-on-facebook.html)
135. [**Gsuite Hangouts Chat 5k IDOR**](https://secreltyhiddenwriteups.blogspot.com/2018/07/gsuite-hangouts-chat-5k-idor.html)
136. [**How I pwned a company using IDOR and Blind XSS**](https://www.ansariosama.com/2017/11/how-i-pwned-company-using-idor-blind-xss.html)
137. [**Disclose Private Dashboard Chart's name and data in Facebook Analytics**](https://bugreader.com/jubabaghdad@disclose-private-dashboard-charts-name-and-data-in-facebook-analytics-184)
138. [*IDOR when editing users leads to Account Takeover without User Interaction at CrowdSignal](https://hackerone.com/reports/915114) to Automattic - 177 upvotes,
139. [*IDOR leads to Edit Anyone's Blogs / Websites](https://hackerone.com/reports/974222) to Automattic - 125 upvotes, $200**
140. [*IDOR and statistics leakage in Orders](https://hackerone.com/reports/544329) to Twitter - 108 upvotes, $289**
141. [*IDOR in](https://hackerone.com/reports/990878) <https://3d.cs.money/> to CS Money - 107 upvotes, $200**
142. [*IDOR leading to downloading of any attachment](https://hackerone.com/reports/668439) to BCM Messenger - 101 upvotes, $100**
143. [*IDOR when moving contents at CrowdSignal](https://hackerone.com/reports/915127) to Automattic - 75 upvotes, $550**
144. [*](http://galnagli.com/DoD_IDOR/)<http://galnagli.com/DoD_IDOR/>**
145. [*](https://hackerone.com/reports/230328)<https://hackerone.com/reports/230328>**
146. [*IDOR to delete images from other stores](https://hackerone.com/reports/404797) to Zomato - 48 upvotes, $600**
147. [*IDOR in marketing calendar tool](https://hackerone.com/reports/797685) to Semrush - 48 upvotes, $500**
148. [*IDOR when creating App on [platform.streamlabs.com/api/v1/store/whitelist] with user_id field](https://hackerone.com/reports/983070) to Logitech - 47 upvotes,
149. [*IDOR with Geolocation data not stripped from images](https://hackerone.com/reports/906907) to IRCCloud - 36 upvotes, $200**
150. [*IDOR in semrush academy](https://hackerone.com/reports/783708) to Semrush - 35 upvotes, $505**
151. [*Idor on the DELETE /comments/](https://hackerone.com/reports/861849) to RGhost - 29 upvotes, $0**
152. [*[NR Insights] IDOR - Modify the filter settings for any NR Insights dashboard through internal_api endpoint](https://hackerone.com/reports/459443) to New Relic -
153. [*IDOR in editing courses](https://hackerone.com/reports/227522) to Maximum - 26 upvotes, $300**
154. [*IDOR when editing email leads to Account Takeover on Atavist](https://hackerone.com/reports/950881) to Automattic - 23 upvotes, $150**
155. [*IDOR to view User Order Information](https://hackerone.com/reports/287789) to BOHEMIA INTERACTIVE a.s. - 21 upvotes, $130**
156. [*IDOR on deleting drafts on](https://hackerone.com/reports/868590) <https://apps.topcoder.com/wiki/users/viewmydrafts.action> via discardDraftId parameter to
157. [*IDOR - Deleting other user's signature via /appsuite/api/snippet?action=update (although an error is thrown)](https://hackerone.com/reports/199321) to Open-
