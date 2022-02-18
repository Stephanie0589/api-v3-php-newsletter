
# SendinBlue's API v3 Php Newsletter

Réalisation d'un formulaire d'inscription à une newsletter connecté à l'API Sendinblue.

- API version: 3.0.0

Pour plus d'informations sur SendinBlue V3, allez sur : https://github.com/sendinblue/APIv3-php-library

Pour consulter la documentation concernant les développeurs : https://developers.sendinblue.com/

## Requirements

PHP 5.6 et versions ultérieures 

## Installation & Usage
### Composer

```
composer require sendinblue/api-v3-sdk "8.x.x"
```
Faire en plus :
* ajouter les dépendances : `` composer install `` 
* ajoutez le chargeur automatique à votre application avec cette ligne : `` require("vendor/autoload.php")  `` 

## Getting Started

Veuillez suivre la procédure d'installation puis exécutez ce qui suit :

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation Officielle pour API Endpoints

Tous les URI sont relatifs à *https://api.sendinblue.com/v3*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Get your account information, plan and credits details
*AttributesApi* | [**createAttribute**](docs/Api/AttributesApi.md#createattribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Create contact attribute
*AttributesApi* | [**deleteAttribute**](docs/Api/AttributesApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Delete an attribute
*AttributesApi* | [**getAttributes**](docs/Api/AttributesApi.md#getattributes) | **GET** /contacts/attributes | List all attributes
*AttributesApi* | [**updateAttribute**](docs/Api/AttributesApi.md#updateattribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Update contact attribute
*CRMApi* | [**crmFilesIdDataGet**](docs/Api/CRMApi.md#crmfilesiddataget) | **GET** /crm/files/{id}/data | Get file data by id.
*CRMApi* | [**crmFilesIdDelete**](docs/Api/CRMApi.md#crmfilesiddelete) | **DELETE** /crm/files/{id} | Delete file.
*CRMApi* | [**crmFilesIdGet**](docs/Api/CRMApi.md#crmfilesidget) | **GET** /crm/files/{id} | Download file by id.
*CRMApi* | [**crmFilesPost**](docs/Api/CRMApi.md#crmfilespost) | **POST** /crm/files | Upload and create file.
*CRMApi* | [**crmNotesIdDelete**](docs/Api/CRMApi.md#crmnotesiddelete) | **DELETE** /crm/notes/{id} | Delete Note by ID
*CRMApi* | [**crmNotesIdGet**](docs/Api/CRMApi.md#crmnotesidget) | **GET** /crm/notes/{id} | Get one Note by ID
*CRMApi* | [**crmNotesIdPatch**](docs/Api/CRMApi.md#crmnotesidpatch) | **PATCH** /crm/notes/{id} | Update a note
*CRMApi* | [**crmNotesPost**](docs/Api/CRMApi.md#crmnotespost) | **POST** /crm/notes | Create a new Note
*CRMApi* | [**crmTasksIdDelete**](docs/Api/CRMApi.md#crmtasksiddelete) | **DELETE** /crm/tasks/{id} | Delete Task by id
*CRMApi* | [**crmTasksIdGet**](docs/Api/CRMApi.md#crmtasksidget) | **GET** /crm/tasks/{id} | Get one Task by ID
*CRMApi* | [**crmTasksIdPatch**](docs/Api/CRMApi.md#crmtasksidpatch) | **PATCH** /crm/tasks/{id} | Update partial existing task
*CRMApi* | [**crmTasksPost**](docs/Api/CRMApi.md#crmtaskspost) | **POST** /crm/tasks | Create a new Task
*ContactsApi* | [**addContactToList**](docs/Api/ContactsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ContactsApi* | [**createAttribute**](docs/Api/ContactsApi.md#createattribute) | **POST** /contacts/attributes/{attributeCategory}/{attributeName} | Create contact attribute
*ContactsApi* | [**createContact**](docs/Api/ContactsApi.md#createcontact) | **POST** /contacts | Create a contact
*ContactsApi* | [**createDoiContact**](docs/Api/ContactsApi.md#createdoicontact) | **POST** /contacts/doubleOptinConfirmation | Create Contact via DOI (Double-Opt-In) Flow
*ContactsApi* | [**createFolder**](docs/Api/ContactsApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*ContactsApi* | [**createList**](docs/Api/ContactsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ContactsApi* | [**deleteAttribute**](docs/Api/ContactsApi.md#deleteattribute) | **DELETE** /contacts/attributes/{attributeCategory}/{attributeName} | Delete an attribute
*ContactsApi* | [**deleteContact**](docs/Api/ContactsApi.md#deletecontact) | **DELETE** /contacts/{identifier} | Delete a contact
*ContactsApi* | [**deleteFolder**](docs/Api/ContactsApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*ContactsApi* | [**deleteList**](docs/Api/ContactsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ContactsApi* | [**getAttributes**](docs/Api/ContactsApi.md#getattributes) | **GET** /contacts/attributes | List all attributes
*ContactsApi* | [**getContactInfo**](docs/Api/ContactsApi.md#getcontactinfo) | **GET** /contacts/{identifier} | Get a contact&#39;s details
*ContactsApi* | [**getContactStats**](docs/Api/ContactsApi.md#getcontactstats) | **GET** /contacts/{identifier}/campaignStats | Get email campaigns&#39; statistics for a contact
*ContactsApi* | [**getContacts**](docs/Api/ContactsApi.md#getcontacts) | **GET** /contacts | Get all the contacts
*ContactsApi* | [**getContactsFromList**](docs/Api/ContactsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get contacts in a list
*ContactsApi* | [**getFolder**](docs/Api/ContactsApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns a folder&#39;s details
*ContactsApi* | [**getFolderLists**](docs/Api/ContactsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get lists in a folder
*ContactsApi* | [**getFolders**](docs/Api/ContactsApi.md#getfolders) | **GET** /contacts/folders | Get all folders
*ContactsApi* | [**getList**](docs/Api/ContactsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get a list&#39;s details
*ContactsApi* | [**getLists**](docs/Api/ContactsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ContactsApi* | [**importContacts**](docs/Api/ContactsApi.md#importcontacts) | **POST** /contacts/import | Import contacts
*ContactsApi* | [**removeContactFromList**](docs/Api/ContactsApi.md#removecontactfromlist) | **POST** /contacts/lists/{listId}/contacts/remove | Delete a contact from a list
*ContactsApi* | [**requestContactExport**](docs/Api/ContactsApi.md#requestcontactexport) | **POST** /contacts/export | Export contacts
*ContactsApi* | [**updateAttribute**](docs/Api/ContactsApi.md#updateattribute) | **PUT** /contacts/attributes/{attributeCategory}/{attributeName} | Update contact attribute
*ContactsApi* | [**updateBatchContacts**](docs/Api/ContactsApi.md#updatebatchcontacts) | **POST** /contacts/batch | Update multiple contacts
*ContactsApi* | [**updateContact**](docs/Api/ContactsApi.md#updatecontact) | **PUT** /contacts/{identifier} | Update a contact
*ContactsApi* | [**updateFolder**](docs/Api/ContactsApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a folder
*ContactsApi* | [**updateList**](docs/Api/ContactsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*EmailCampaignsApi* | [**createEmailCampaign**](docs/Api/EmailCampaignsApi.md#createemailcampaign) | **POST** /emailCampaigns | Create an email campaign
*EmailCampaignsApi* | [**deleteEmailCampaign**](docs/Api/EmailCampaignsApi.md#deleteemailcampaign) | **DELETE** /emailCampaigns/{campaignId} | Delete an email campaign
*EmailCampaignsApi* | [**emailExportRecipients**](docs/Api/EmailCampaignsApi.md#emailexportrecipients) | **POST** /emailCampaigns/{campaignId}/exportRecipients | Export the recipients of an email campaign
*EmailCampaignsApi* | [**getAbTestCampaignResult**](docs/Api/EmailCampaignsApi.md#getabtestcampaignresult) | **GET** /emailCampaigns/{campaignId}/abTestCampaignResult | Get an A/B test email campaign results
*EmailCampaignsApi* | [**getEmailCampaign**](docs/Api/EmailCampaignsApi.md#getemailcampaign) | **GET** /emailCampaigns/{campaignId} | Get an email campaign report
*EmailCampaignsApi* | [**getEmailCampaigns**](docs/Api/EmailCampaignsApi.md#getemailcampaigns) | **GET** /emailCampaigns | Return all your created email campaigns
*EmailCampaignsApi* | [**getSharedTemplateUrl**](docs/Api/EmailCampaignsApi.md#getsharedtemplateurl) | **GET** /emailCampaigns/{campaignId}/sharedUrl | Get a shared template url
*EmailCampaignsApi* | [**sendEmailCampaignNow**](docs/Api/EmailCampaignsApi.md#sendemailcampaignnow) | **POST** /emailCampaigns/{campaignId}/sendNow | Send an email campaign immediately, based on campaignId
*EmailCampaignsApi* | [**sendReport**](docs/Api/EmailCampaignsApi.md#sendreport) | **POST** /emailCampaigns/{campaignId}/sendReport | Send the report of a campaign
*EmailCampaignsApi* | [**sendTestEmail**](docs/Api/EmailCampaignsApi.md#sendtestemail) | **POST** /emailCampaigns/{campaignId}/sendTest | Send an email campaign to your test list
*EmailCampaignsApi* | [**updateCampaignStatus**](docs/Api/EmailCampaignsApi.md#updatecampaignstatus) | **PUT** /emailCampaigns/{campaignId}/status | Update an email campaign status
*EmailCampaignsApi* | [**updateEmailCampaign**](docs/Api/EmailCampaignsApi.md#updateemailcampaign) | **PUT** /emailCampaigns/{campaignId} | Update an email campaign
*EmailCampaignsApi* | [**uploadImageToGallery**](docs/Api/EmailCampaignsApi.md#uploadimagetogallery) | **POST** /emailCampaigns/images | Upload an image to your account&#39;s image gallery
*FoldersApi* | [**createFolder**](docs/Api/FoldersApi.md#createfolder) | **POST** /contacts/folders | Create a folder
*FoldersApi* | [**deleteFolder**](docs/Api/FoldersApi.md#deletefolder) | **DELETE** /contacts/folders/{folderId} | Delete a folder (and all its lists)
*FoldersApi* | [**getFolder**](docs/Api/FoldersApi.md#getfolder) | **GET** /contacts/folders/{folderId} | Returns a folder&#39;s details
*FoldersApi* | [**getFolderLists**](docs/Api/FoldersApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get lists in a folder
*FoldersApi* | [**getFolders**](docs/Api/FoldersApi.md#getfolders) | **GET** /contacts/folders | Get all folders
*FoldersApi* | [**updateFolder**](docs/Api/FoldersApi.md#updatefolder) | **PUT** /contacts/folders/{folderId} | Update a folder
*InboundParsingApi* | [**getInboundEmailEvents**](docs/Api/InboundParsingApi.md#getinboundemailevents) | **GET** /inbound/events | Get the list of all the events for the received emails.
*InboundParsingApi* | [**getInboundEmailEventsByUuid**](docs/Api/InboundParsingApi.md#getinboundemaileventsbyuuid) | **GET** /inbound/events/{uuid} | Fetch all events history for one particular received email.
*ListsApi* | [**addContactToList**](docs/Api/ListsApi.md#addcontacttolist) | **POST** /contacts/lists/{listId}/contacts/add | Add existing contacts to a list
*ListsApi* | [**createList**](docs/Api/ListsApi.md#createlist) | **POST** /contacts/lists | Create a list
*ListsApi* | [**deleteList**](docs/Api/ListsApi.md#deletelist) | **DELETE** /contacts/lists/{listId} | Delete a list
*ListsApi* | [**getContactsFromList**](docs/Api/ListsApi.md#getcontactsfromlist) | **GET** /contacts/lists/{listId}/contacts | Get contacts in a list
*ListsApi* | [**getFolderLists**](docs/Api/ListsApi.md#getfolderlists) | **GET** /contacts/folders/{folderId}/lists | Get lists in a folder
*ListsApi* | [**getList**](docs/Api/ListsApi.md#getlist) | **GET** /contacts/lists/{listId} | Get a list&#39;s details
*ListsApi* | [**getLists**](docs/Api/ListsApi.md#getlists) | **GET** /contacts/lists | Get all the lists
*ListsApi* | [**removeContactFromList**](docs/Api/ListsApi.md#removecontactfromlist) | **POST** /contacts/lists/{listId}/contacts/remove | Delete a contact from a list
*ListsApi* | [**updateList**](docs/Api/ListsApi.md#updatelist) | **PUT** /contacts/lists/{listId} | Update a list
*MasterAccountApi* | [**corporateMasterAccountGet**](docs/Api/MasterAccountApi.md#corporatemasteraccountget) | **GET** /corporate/masterAccount | Get the details of requested master account
*MasterAccountApi* | [**corporateSubAccountGet**](docs/Api/MasterAccountApi.md#corporatesubaccountget) | **GET** /corporate/subAccount | Get the list of all the sub-accounts of the master account.
*MasterAccountApi* | [**corporateSubAccountIdGet**](docs/Api/MasterAccountApi.md#corporatesubaccountidget) | **GET** /corporate/subAccount/{id} | Get sub-account details
*MasterAccountApi* | [**corporateSubAccountIdPlanPut**](docs/Api/MasterAccountApi.md#corporatesubaccountidplanput) | **PUT** /corporate/subAccount/{id}/plan | Update sub-account plan
*MasterAccountApi* | [**corporateSubAccountPost**](docs/Api/MasterAccountApi.md#corporatesubaccountpost) | **POST** /corporate/subAccount | Create a new sub-account under a master account.
*MasterAccountApi* | [**corporateSubAccountSsoTokenPost**](docs/Api/MasterAccountApi.md#corporatesubaccountssotokenpost) | **POST** /corporate/subAccount/ssoToken | Generate SSO token to access Sendinblue
*ProcessApi* | [**getProcess**](docs/Api/ProcessApi.md#getprocess) | **GET** /processes/{processId} | Return the informations for a process
*ProcessApi* | [**getProcesses**](docs/Api/ProcessApi.md#getprocesses) | **GET** /processes | Return all the processes for your account
*ResellerApi* | [**addCredits**](docs/Api/ResellerApi.md#addcredits) | **POST** /reseller/children/{childIdentifier}/credits/add | Add Email and/or SMS credits to a specific child account
*ResellerApi* | [**associateIpToChild**](docs/Api/ResellerApi.md#associateiptochild) | **POST** /reseller/children/{childIdentifier}/ips/associate | Associate a dedicated IP to the child
*ResellerApi* | [**createChildDomain**](docs/Api/ResellerApi.md#createchilddomain) | **POST** /reseller/children/{childIdentifier}/domains | Create a domain for a child account
*ResellerApi* | [**createResellerChild**](docs/Api/ResellerApi.md#createresellerchild) | **POST** /reseller/children | Creates a reseller child
*ResellerApi* | [**deleteChildDomain**](docs/Api/ResellerApi.md#deletechilddomain) | **DELETE** /reseller/children/{childIdentifier}/domains/{domainName} | Delete the sender domain of the reseller child based on the childIdentifier and domainName passed
*ResellerApi* | [**deleteResellerChild**](docs/Api/ResellerApi.md#deleteresellerchild) | **DELETE** /reseller/children/{childIdentifier} | Delete a single reseller child based on the child identifier supplied
*ResellerApi* | [**dissociateIpFromChild**](docs/Api/ResellerApi.md#dissociateipfromchild) | **POST** /reseller/children/{childIdentifier}/ips/dissociate | Dissociate a dedicated IP to the child
*ResellerApi* | [**getChildAccountCreationStatus**](docs/Api/ResellerApi.md#getchildaccountcreationstatus) | **GET** /reseller/children/{childIdentifier}/accountCreationStatus | Get the status of a reseller&#39;s child account creation, whether it is successfully created (exists) or not based on the identifier supplied
*ResellerApi* | [**getChildDomains**](docs/Api/ResellerApi.md#getchilddomains) | **GET** /reseller/children/{childIdentifier}/domains | Get all sender domains for a specific child account
*ResellerApi* | [**getChildInfo**](docs/Api/ResellerApi.md#getchildinfo) | **GET** /reseller/children/{childIdentifier} | Get a child account&#39;s details
*ResellerApi* | [**getResellerChilds**](docs/Api/ResellerApi.md#getresellerchilds) | **GET** /reseller/children | Get the list of all children accounts
*ResellerApi* | [**getSsoToken**](docs/Api/ResellerApi.md#getssotoken) | **GET** /reseller/children/{childIdentifier}/auth | Get session token to access Sendinblue (SSO)
*ResellerApi* | [**removeCredits**](docs/Api/ResellerApi.md#removecredits) | **POST** /reseller/children/{childIdentifier}/credits/remove | Remove Email and/or SMS credits from a specific child account
*ResellerApi* | [**updateChildAccountStatus**](docs/Api/ResellerApi.md#updatechildaccountstatus) | **PUT** /reseller/children/{childIdentifier}/accountStatus | Update info of reseller&#39;s child account status based on the childIdentifier supplied
*ResellerApi* | [**updateChildDomain**](docs/Api/ResellerApi.md#updatechilddomain) | **PUT** /reseller/children/{childIdentifier}/domains/{domainName} | Update the sender domain of reseller&#39;s child based on the childIdentifier and domainName passed
*ResellerApi* | [**updateResellerChild**](docs/Api/ResellerApi.md#updateresellerchild) | **PUT** /reseller/children/{childIdentifier} | Update info of reseller&#39;s child based on the child identifier supplied
*SMSCampaignsApi* | [**createSmsCampaign**](docs/Api/SMSCampaignsApi.md#createsmscampaign) | **POST** /smsCampaigns | Creates an SMS campaign
*SMSCampaignsApi* | [**deleteSmsCampaign**](docs/Api/SMSCampaignsApi.md#deletesmscampaign) | **DELETE** /smsCampaigns/{campaignId} | Delete an SMS campaign
*SMSCampaignsApi* | [**getSmsCampaign**](docs/Api/SMSCampaignsApi.md#getsmscampaign) | **GET** /smsCampaigns/{campaignId} | Get an SMS campaign
*SMSCampaignsApi* | [**getSmsCampaigns**](docs/Api/SMSCampaignsApi.md#getsmscampaigns) | **GET** /smsCampaigns | Returns the information for all your created SMS campaigns
*SMSCampaignsApi* | [**requestSmsRecipientExport**](docs/Api/SMSCampaignsApi.md#requestsmsrecipientexport) | **POST** /smsCampaigns/{campaignId}/exportRecipients | Export an SMS campaign&#39;s recipients
*SMSCampaignsApi* | [**sendSmsCampaignNow**](docs/Api/SMSCampaignsApi.md#sendsmscampaignnow) | **POST** /smsCampaigns/{campaignId}/sendNow | Send your SMS campaign immediately
*SMSCampaignsApi* | [**sendSmsReport**](docs/Api/SMSCampaignsApi.md#sendsmsreport) | **POST** /smsCampaigns/{campaignId}/sendReport | Send an SMS campaign&#39;s report
*SMSCampaignsApi* | [**sendTestSms**](docs/Api/SMSCampaignsApi.md#sendtestsms) | **POST** /smsCampaigns/{campaignId}/sendTest | Send a test SMS campaign
*SMSCampaignsApi* | [**updateSmsCampaign**](docs/Api/SMSCampaignsApi.md#updatesmscampaign) | **PUT** /smsCampaigns/{campaignId} | Update an SMS campaign
*SMSCampaignsApi* | [**updateSmsCampaignStatus**](docs/Api/SMSCampaignsApi.md#updatesmscampaignstatus) | **PUT** /smsCampaigns/{campaignId}/status | Update a campaign&#39;s status
*SendersApi* | [**createSender**](docs/Api/SendersApi.md#createsender) | **POST** /senders | Create a new sender
*SendersApi* | [**deleteSender**](docs/Api/SendersApi.md#deletesender) | **DELETE** /senders/{senderId} | Delete a sender
*SendersApi* | [**getIps**](docs/Api/SendersApi.md#getips) | **GET** /senders/ips | Get all the dedicated IPs for your account
*SendersApi* | [**getIpsFromSender**](docs/Api/SendersApi.md#getipsfromsender) | **GET** /senders/{senderId}/ips | Get all the dedicated IPs for a sender
*SendersApi* | [**getSenders**](docs/Api/SendersApi.md#getsenders) | **GET** /senders | Get the list of all your senders
*SendersApi* | [**updateSender**](docs/Api/SendersApi.md#updatesender) | **PUT** /senders/{senderId} | Update a sender
*TransactionalEmailsApi* | [**blockNewDomain**](docs/Api/TransactionalEmailsApi.md#blocknewdomain) | **POST** /smtp/blockedDomains | Add a new domain to the list of blocked domains
*TransactionalEmailsApi* | [**createSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#createsmtptemplate) | **POST** /smtp/templates | Create an email template
*TransactionalEmailsApi* | [**deleteBlockedDomain**](docs/Api/TransactionalEmailsApi.md#deleteblockeddomain) | **DELETE** /smtp/blockedDomains/{domain} | Unblock an existing domain from the list of blocked domains
*TransactionalEmailsApi* | [**deleteHardbounces**](docs/Api/TransactionalEmailsApi.md#deletehardbounces) | **POST** /smtp/deleteHardbounces | Delete hardbounces
*TransactionalEmailsApi* | [**deleteSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#deletesmtptemplate) | **DELETE** /smtp/templates/{templateId} | Delete an inactive email template
*TransactionalEmailsApi* | [**getAggregatedSmtpReport**](docs/Api/TransactionalEmailsApi.md#getaggregatedsmtpreport) | **GET** /smtp/statistics/aggregatedReport | Get your transactional email activity aggregated over a period of time
*TransactionalEmailsApi* | [**getBlockedDomains**](docs/Api/TransactionalEmailsApi.md#getblockeddomains) | **GET** /smtp/blockedDomains | Get the list of blocked domains
*TransactionalEmailsApi* | [**getEmailEventReport**](docs/Api/TransactionalEmailsApi.md#getemaileventreport) | **GET** /smtp/statistics/events | Get all your transactional email activity (unaggregated events)
*TransactionalEmailsApi* | [**getSmtpReport**](docs/Api/TransactionalEmailsApi.md#getsmtpreport) | **GET** /smtp/statistics/reports | Get your transactional email activity aggregated per day
*TransactionalEmailsApi* | [**getSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#getsmtptemplate) | **GET** /smtp/templates/{templateId} | Returns the template information
*TransactionalEmailsApi* | [**getSmtpTemplates**](docs/Api/TransactionalEmailsApi.md#getsmtptemplates) | **GET** /smtp/templates | Get the list of email templates
*TransactionalEmailsApi* | [**getTransacBlockedContacts**](docs/Api/TransactionalEmailsApi.md#gettransacblockedcontacts) | **GET** /smtp/blockedContacts | Get the list of blocked or unsubscribed transactional contacts
*TransactionalEmailsApi* | [**getTransacEmailContent**](docs/Api/TransactionalEmailsApi.md#gettransacemailcontent) | **GET** /smtp/emails/{uuid} | Get the personalized content of a sent transactional email
*TransactionalEmailsApi* | [**getTransacEmailsList**](docs/Api/TransactionalEmailsApi.md#gettransacemailslist) | **GET** /smtp/emails | Get the list of transactional emails on the basis of allowed filters
*TransactionalEmailsApi* | [**sendTestTemplate**](docs/Api/TransactionalEmailsApi.md#sendtesttemplate) | **POST** /smtp/templates/{templateId}/sendTest | Send a template to your test list
*TransactionalEmailsApi* | [**sendTransacEmail**](docs/Api/TransactionalEmailsApi.md#sendtransacemail) | **POST** /smtp/email | Send a transactional email
*TransactionalEmailsApi* | [**smtpBlockedContactsEmailDelete**](docs/Api/TransactionalEmailsApi.md#smtpblockedcontactsemaildelete) | **DELETE** /smtp/blockedContacts/{email} | Unblock or resubscribe a transactional contact
*TransactionalEmailsApi* | [**smtpLogMessageIdDelete**](docs/Api/TransactionalEmailsApi.md#smtplogmessageiddelete) | **DELETE** /smtp/log/{messageId} | Delete an SMTP transactional log
*TransactionalEmailsApi* | [**updateSmtpTemplate**](docs/Api/TransactionalEmailsApi.md#updatesmtptemplate) | **PUT** /smtp/templates/{templateId} | Update an email template
*TransactionalSMSApi* | [**getSmsEvents**](docs/Api/TransactionalSMSApi.md#getsmsevents) | **GET** /transactionalSMS/statistics/events | Get all your SMS activity (unaggregated events)
*TransactionalSMSApi* | [**getTransacAggregatedSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacaggregatedsmsreport) | **GET** /transactionalSMS/statistics/aggregatedReport | Get your SMS activity aggregated over a period of time
*TransactionalSMSApi* | [**getTransacSmsReport**](docs/Api/TransactionalSMSApi.md#gettransacsmsreport) | **GET** /transactionalSMS/statistics/reports | Get your SMS activity aggregated per day
*TransactionalSMSApi* | [**sendTransacSms**](docs/Api/TransactionalSMSApi.md#sendtransacsms) | **POST** /transactionalSMS/sms | Send SMS message to a mobile number
*WebhooksApi* | [**createWebhook**](docs/Api/WebhooksApi.md#createwebhook) | **POST** /webhooks | Create a webhook
*WebhooksApi* | [**deleteWebhook**](docs/Api/WebhooksApi.md#deletewebhook) | **DELETE** /webhooks/{webhookId} | Delete a webhook
*WebhooksApi* | [**getWebhook**](docs/Api/WebhooksApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Get a webhook details
*WebhooksApi* | [**getWebhooks**](docs/Api/WebhooksApi.md#getwebhooks) | **GET** /webhooks | Get all webhooks
*WebhooksApi* | [**updateWebhook**](docs/Api/WebhooksApi.md#updatewebhook) | **PUT** /webhooks/{webhookId} | Update a webhook


## Documentation For Models

 - [AbTestCampaignResult](docs/Model/AbTestCampaignResult.md)
 - [AbTestCampaignResultClickedLinks](docs/Model/AbTestCampaignResultClickedLinks.md)
 - [AbTestCampaignResultStatistics](docs/Model/AbTestCampaignResultStatistics.md)
 - [AbTestVersionClicks](docs/Model/AbTestVersionClicks.md)
 - [AbTestVersionClicksInner](docs/Model/AbTestVersionClicksInner.md)
 - [AbTestVersionStats](docs/Model/AbTestVersionStats.md)
 - [AddChildDomain](docs/Model/AddChildDomain.md)
 - [AddContactToList](docs/Model/AddContactToList.md)
 - [AddCredits](docs/Model/AddCredits.md)
 - [BlockDomain](docs/Model/BlockDomain.md)
 - [Body](docs/Model/Body.md)
 - [Body1](docs/Model/Body1.md)
 - [Contact](docs/Model/Contact.md)
 - [CreateAttribute](docs/Model/CreateAttribute.md)
 - [CreateAttributeEnumeration](docs/Model/CreateAttributeEnumeration.md)
 - [CreateChild](docs/Model/CreateChild.md)
 - [CreateContact](docs/Model/CreateContact.md)
 - [CreateDoiContact](docs/Model/CreateDoiContact.md)
 - [CreateEmailCampaign](docs/Model/CreateEmailCampaign.md)
 - [CreateEmailCampaignRecipients](docs/Model/CreateEmailCampaignRecipients.md)
 - [CreateEmailCampaignSender](docs/Model/CreateEmailCampaignSender.md)
 - [CreateList](docs/Model/CreateList.md)
 - [CreateModel](docs/Model/CreateModel.md)
 - [CreateReseller](docs/Model/CreateReseller.md)
 - [CreateSender](docs/Model/CreateSender.md)
 - [CreateSenderIps](docs/Model/CreateSenderIps.md)
 - [CreateSenderModel](docs/Model/CreateSenderModel.md)
 - [CreateSmsCampaign](docs/Model/CreateSmsCampaign.md)
 - [CreateSmsCampaignRecipients](docs/Model/CreateSmsCampaignRecipients.md)
 - [CreateSmtpEmail](docs/Model/CreateSmtpEmail.md)
 - [CreateSmtpTemplate](docs/Model/CreateSmtpTemplate.md)
 - [CreateSmtpTemplateSender](docs/Model/CreateSmtpTemplateSender.md)
 - [CreateSubAccount](docs/Model/CreateSubAccount.md)
 - [CreateUpdateContactModel](docs/Model/CreateUpdateContactModel.md)
 - [CreateUpdateFolder](docs/Model/CreateUpdateFolder.md)
 - [CreateWebhook](docs/Model/CreateWebhook.md)
 - [CreatedProcessId](docs/Model/CreatedProcessId.md)
 - [DeleteHardbounces](docs/Model/DeleteHardbounces.md)
 - [EmailExportRecipients](docs/Model/EmailExportRecipients.md)
 - [ErrorModel](docs/Model/ErrorModel.md)
 - [FileData](docs/Model/FileData.md)
 - [GetAccountMarketingAutomation](docs/Model/GetAccountMarketingAutomation.md)
 - [GetAccountPlan](docs/Model/GetAccountPlan.md)
 - [GetAccountRelay](docs/Model/GetAccountRelay.md)
 - [GetAccountRelayData](docs/Model/GetAccountRelayData.md)
 - [GetAggregatedReport](docs/Model/GetAggregatedReport.md)
 - [GetAttributes](docs/Model/GetAttributes.md)
 - [GetAttributesAttributes](docs/Model/GetAttributesAttributes.md)
 - [GetAttributesEnumeration](docs/Model/GetAttributesEnumeration.md)
 - [GetBlockedDomains](docs/Model/GetBlockedDomains.md)
 - [GetCampaignOverview](docs/Model/GetCampaignOverview.md)
 - [GetCampaignRecipients](docs/Model/GetCampaignRecipients.md)
 - [GetCampaignStats](docs/Model/GetCampaignStats.md)
 - [GetChildAccountCreationStatus](docs/Model/GetChildAccountCreationStatus.md)
 - [GetChildDomain](docs/Model/GetChildDomain.md)
 - [GetChildDomains](docs/Model/GetChildDomains.md)
 - [GetChildInfoApiKeys](docs/Model/GetChildInfoApiKeys.md)
 - [GetChildInfoApiKeysV2](docs/Model/GetChildInfoApiKeysV2.md)
 - [GetChildInfoApiKeysV3](docs/Model/GetChildInfoApiKeysV3.md)
 - [GetChildInfoCredits](docs/Model/GetChildInfoCredits.md)
 - [GetChildInfoStatistics](docs/Model/GetChildInfoStatistics.md)
 - [GetChildrenList](docs/Model/GetChildrenList.md)
 - [GetClient](docs/Model/GetClient.md)
 - [GetContactCampaignStats](docs/Model/GetContactCampaignStats.md)
 - [GetContactCampaignStatsClicked](docs/Model/GetContactCampaignStatsClicked.md)
 - [GetContactCampaignStatsOpened](docs/Model/GetContactCampaignStatsOpened.md)
 - [GetContactCampaignStatsTransacAttributes](docs/Model/GetContactCampaignStatsTransacAttributes.md)
 - [GetContactCampaignStatsUnsubscriptions](docs/Model/GetContactCampaignStatsUnsubscriptions.md)
 - [GetContactDetails](docs/Model/GetContactDetails.md)
 - [GetContacts](docs/Model/GetContacts.md)
 - [GetDeviceBrowserStats](docs/Model/GetDeviceBrowserStats.md)
 - [GetEmailCampaigns](docs/Model/GetEmailCampaigns.md)
 - [GetEmailEventReport](docs/Model/GetEmailEventReport.md)
 - [GetEmailEventReportEvents](docs/Model/GetEmailEventReportEvents.md)
 - [GetExtendedCampaignOverviewSender](docs/Model/GetExtendedCampaignOverviewSender.md)
 - [GetExtendedCampaignStats](docs/Model/GetExtendedCampaignStats.md)
 - [GetExtendedClientAddress](docs/Model/GetExtendedClientAddress.md)
 - [GetExtendedContactDetailsStatistics](docs/Model/GetExtendedContactDetailsStatistics.md)
 - [GetExtendedContactDetailsStatisticsClicked](docs/Model/GetExtendedContactDetailsStatisticsClicked.md)
 - [GetExtendedContactDetailsStatisticsDelivered](docs/Model/GetExtendedContactDetailsStatisticsDelivered.md)
 - [GetExtendedContactDetailsStatisticsLinks](docs/Model/GetExtendedContactDetailsStatisticsLinks.md)
 - [GetExtendedContactDetailsStatisticsMessagesSent](docs/Model/GetExtendedContactDetailsStatisticsMessagesSent.md)
 - [GetExtendedContactDetailsStatisticsOpened](docs/Model/GetExtendedContactDetailsStatisticsOpened.md)
 - [GetExtendedContactDetailsStatisticsUnsubscriptions](docs/Model/GetExtendedContactDetailsStatisticsUnsubscriptions.md)
 - [GetExtendedContactDetailsStatisticsUnsubscriptionsAdminUnsubscription](docs/Model/GetExtendedContactDetailsStatisticsUnsubscriptionsAdminUnsubscription.md)
 - [GetExtendedContactDetailsStatisticsUnsubscriptionsUserUnsubscription](docs/Model/GetExtendedContactDetailsStatisticsUnsubscriptionsUserUnsubscription.md)
 - [GetExtendedListCampaignStats](docs/Model/GetExtendedListCampaignStats.md)
 - [GetFolder](docs/Model/GetFolder.md)
 - [GetFolderLists](docs/Model/GetFolderLists.md)
 - [GetFolders](docs/Model/GetFolders.md)
 - [GetInboundEmailEvents](docs/Model/GetInboundEmailEvents.md)
 - [GetInboundEmailEventsByUuid](docs/Model/GetInboundEmailEventsByUuid.md)
 - [GetInboundEmailEventsByUuidAttachments](docs/Model/GetInboundEmailEventsByUuidAttachments.md)
 - [GetInboundEmailEventsByUuidLogs](docs/Model/GetInboundEmailEventsByUuidLogs.md)
 - [GetInboundEmailEventsEvents](docs/Model/GetInboundEmailEventsEvents.md)
 - [GetIp](docs/Model/GetIp.md)
 - [GetIpFromSender](docs/Model/GetIpFromSender.md)
 - [GetIps](docs/Model/GetIps.md)
 - [GetIpsFromSender](docs/Model/GetIpsFromSender.md)
 - [GetList](docs/Model/GetList.md)
 - [GetLists](docs/Model/GetLists.md)
 - [GetProcess](docs/Model/GetProcess.md)
 - [GetProcesses](docs/Model/GetProcesses.md)
 - [GetReports](docs/Model/GetReports.md)
 - [GetReportsReports](docs/Model/GetReportsReports.md)
 - [GetSendersList](docs/Model/GetSendersList.md)
 - [GetSendersListIps](docs/Model/GetSendersListIps.md)
 - [GetSendersListSenders](docs/Model/GetSendersListSenders.md)
 - [GetSharedTemplateUrl](docs/Model/GetSharedTemplateUrl.md)
 - [GetSmsCampaignOverview](docs/Model/GetSmsCampaignOverview.md)
 - [GetSmsCampaignStats](docs/Model/GetSmsCampaignStats.md)
 - [GetSmsCampaigns](docs/Model/GetSmsCampaigns.md)
 - [GetSmsEventReport](docs/Model/GetSmsEventReport.md)
 - [GetSmsEventReportEvents](docs/Model/GetSmsEventReportEvents.md)
 - [GetSmtpTemplateOverview](docs/Model/GetSmtpTemplateOverview.md)
 - [GetSmtpTemplateOverviewSender](docs/Model/GetSmtpTemplateOverviewSender.md)
 - [GetSmtpTemplates](docs/Model/GetSmtpTemplates.md)
 - [GetSsoToken](docs/Model/GetSsoToken.md)
 - [GetStatsByBrowser](docs/Model/GetStatsByBrowser.md)
 - [GetStatsByDevice](docs/Model/GetStatsByDevice.md)
 - [GetStatsByDomain](docs/Model/GetStatsByDomain.md)
 - [GetTransacAggregatedSmsReport](docs/Model/GetTransacAggregatedSmsReport.md)
 - [GetTransacBlockedContacts](docs/Model/GetTransacBlockedContacts.md)
 - [GetTransacBlockedContactsContacts](docs/Model/GetTransacBlockedContactsContacts.md)
 - [GetTransacBlockedContactsReason](docs/Model/GetTransacBlockedContactsReason.md)
 - [GetTransacEmailContent](docs/Model/GetTransacEmailContent.md)
 - [GetTransacEmailContentEvents](docs/Model/GetTransacEmailContentEvents.md)
 - [GetTransacEmailsList](docs/Model/GetTransacEmailsList.md)
 - [GetTransacEmailsListTransactionalEmails](docs/Model/GetTransacEmailsListTransactionalEmails.md)
 - [GetTransacSmsReport](docs/Model/GetTransacSmsReport.md)
 - [GetTransacSmsReportReports](docs/Model/GetTransacSmsReportReports.md)
 - [GetWebhook](docs/Model/GetWebhook.md)
 - [GetWebhooks](docs/Model/GetWebhooks.md)
 - [ManageIp](docs/Model/ManageIp.md)
 - [MasterDetailsResponse](docs/Model/MasterDetailsResponse.md)
 - [MasterDetailsResponseBillingInfo](docs/Model/MasterDetailsResponseBillingInfo.md)
 - [MasterDetailsResponseBillingInfoAddress](docs/Model/MasterDetailsResponseBillingInfoAddress.md)
 - [MasterDetailsResponseBillingInfoName](docs/Model/MasterDetailsResponseBillingInfoName.md)
 - [MasterDetailsResponsePlanInfo](docs/Model/MasterDetailsResponsePlanInfo.md)
 - [MasterDetailsResponsePlanInfoFeatures](docs/Model/MasterDetailsResponsePlanInfoFeatures.md)
 - [Note](docs/Model/Note.md)
 - [NoteData](docs/Model/NoteData.md)
 - [PostContactInfo](docs/Model/PostContactInfo.md)
 - [PostContactInfoContacts](docs/Model/PostContactInfoContacts.md)
 - [PostSendFailed](docs/Model/PostSendFailed.md)
 - [PostSendSmsTestFailed](docs/Model/PostSendSmsTestFailed.md)
 - [RemainingCreditModel](docs/Model/RemainingCreditModel.md)
 - [RemainingCreditModelChild](docs/Model/RemainingCreditModelChild.md)
 - [RemainingCreditModelReseller](docs/Model/RemainingCreditModelReseller.md)
 - [RemoveContactFromList](docs/Model/RemoveContactFromList.md)
 - [RemoveCredits](docs/Model/RemoveCredits.md)
 - [RequestContactExport](docs/Model/RequestContactExport.md)
 - [RequestContactExportCustomContactFilter](docs/Model/RequestContactExportCustomContactFilter.md)
 - [RequestContactImport](docs/Model/RequestContactImport.md)
 - [RequestContactImportNewList](docs/Model/RequestContactImportNewList.md)
 - [RequestSmsRecipientExport](docs/Model/RequestSmsRecipientExport.md)
 - [SendReport](docs/Model/SendReport.md)
 - [SendReportEmail](docs/Model/SendReportEmail.md)
 - [SendSms](docs/Model/SendSms.md)
 - [SendSmtpEmail](docs/Model/SendSmtpEmail.md)
 - [SendSmtpEmailAttachment](docs/Model/SendSmtpEmailAttachment.md)
 - [SendSmtpEmailBcc](docs/Model/SendSmtpEmailBcc.md)
 - [SendSmtpEmailCc](docs/Model/SendSmtpEmailCc.md)
 - [SendSmtpEmailMessageVersions](docs/Model/SendSmtpEmailMessageVersions.md)
 - [SendSmtpEmailReplyTo](docs/Model/SendSmtpEmailReplyTo.md)
 - [SendSmtpEmailReplyTo1](docs/Model/SendSmtpEmailReplyTo1.md)
 - [SendSmtpEmailSender](docs/Model/SendSmtpEmailSender.md)
 - [SendSmtpEmailTo](docs/Model/SendSmtpEmailTo.md)
 - [SendSmtpEmailTo1](docs/Model/SendSmtpEmailTo1.md)
 - [SendTestEmail](docs/Model/SendTestEmail.md)
 - [SendTestSms](docs/Model/SendTestSms.md)
 - [SendTransacSms](docs/Model/SendTransacSms.md)
 - [SsoTokenRequest](docs/Model/SsoTokenRequest.md)
 - [SubAccountDetailsResponse](docs/Model/SubAccountDetailsResponse.md)
 - [SubAccountDetailsResponsePlanInfo](docs/Model/SubAccountDetailsResponsePlanInfo.md)
 - [SubAccountDetailsResponsePlanInfoCredits](docs/Model/SubAccountDetailsResponsePlanInfoCredits.md)
 - [SubAccountDetailsResponsePlanInfoCreditsEmails](docs/Model/SubAccountDetailsResponsePlanInfoCreditsEmails.md)
 - [SubAccountDetailsResponsePlanInfoFeatures](docs/Model/SubAccountDetailsResponsePlanInfoFeatures.md)
 - [SubAccountDetailsResponsePlanInfoFeaturesInbox](docs/Model/SubAccountDetailsResponsePlanInfoFeaturesInbox.md)
 - [SubAccountDetailsResponsePlanInfoFeaturesLandingPage](docs/Model/SubAccountDetailsResponsePlanInfoFeaturesLandingPage.md)
 - [SubAccountDetailsResponsePlanInfoFeaturesUsers](docs/Model/SubAccountDetailsResponsePlanInfoFeaturesUsers.md)
 - [SubAccountUpdatePlanRequest](docs/Model/SubAccountUpdatePlanRequest.md)
 - [SubAccountUpdatePlanRequestCredits](docs/Model/SubAccountUpdatePlanRequestCredits.md)
 - [SubAccountUpdatePlanRequestFeatures](docs/Model/SubAccountUpdatePlanRequestFeatures.md)
 - [SubAccountsResponse](docs/Model/SubAccountsResponse.md)
 - [SubAccountsResponseSubAccounts](docs/Model/SubAccountsResponseSubAccounts.md)
 - [Task](docs/Model/Task.md)
 - [TaskReminder](docs/Model/TaskReminder.md)
 - [UpdateAttribute](docs/Model/UpdateAttribute.md)
 - [UpdateAttributeEnumeration](docs/Model/UpdateAttributeEnumeration.md)
 - [UpdateBatchContacts](docs/Model/UpdateBatchContacts.md)
 - [UpdateBatchContactsContacts](docs/Model/UpdateBatchContactsContacts.md)
 - [UpdateBatchContactsModel](docs/Model/UpdateBatchContactsModel.md)
 - [UpdateCampaignStatus](docs/Model/UpdateCampaignStatus.md)
 - [UpdateChild](docs/Model/UpdateChild.md)
 - [UpdateChildAccountStatus](docs/Model/UpdateChildAccountStatus.md)
 - [UpdateChildDomain](docs/Model/UpdateChildDomain.md)
 - [UpdateContact](docs/Model/UpdateContact.md)
 - [UpdateEmailCampaign](docs/Model/UpdateEmailCampaign.md)
 - [UpdateEmailCampaignRecipients](docs/Model/UpdateEmailCampaignRecipients.md)
 - [UpdateEmailCampaignSender](docs/Model/UpdateEmailCampaignSender.md)
 - [UpdateList](docs/Model/UpdateList.md)
 - [UpdateSender](docs/Model/UpdateSender.md)
 - [UpdateSmsCampaign](docs/Model/UpdateSmsCampaign.md)
 - [UpdateSmtpTemplate](docs/Model/UpdateSmtpTemplate.md)
 - [UpdateSmtpTemplateSender](docs/Model/UpdateSmtpTemplateSender.md)
 - [UpdateWebhook](docs/Model/UpdateWebhook.md)
 - [UploadImageToGallery](docs/Model/UploadImageToGallery.md)
 - [GetChildInfo](docs/Model/GetChildInfo.md)
 - [GetExtendedCampaignOverview](docs/Model/GetExtendedCampaignOverview.md)
 - [GetExtendedClient](docs/Model/GetExtendedClient.md)
 - [GetExtendedContactDetails](docs/Model/GetExtendedContactDetails.md)
 - [GetExtendedList](docs/Model/GetExtendedList.md)
 - [GetSmsCampaign](docs/Model/GetSmsCampaign.md)
 - [GetAccount](docs/Model/GetAccount.md)
 - [GetEmailCampaign](docs/Model/GetEmailCampaign.md)


## Documentation pour l'autorisation


## api-key

La clé API doit être transmise dans les en-têtes de requête en tant que "api-key" pour l'authentification.

- **Type**: API key
- **Nom du paramètre de clé d'API :**: api-key
- **Location**: HTTP header

## partner-key

La clé de partenaire doit être transmise dans les en-têtes de demande en tant que clé de partenaire avec une paire de clés API pour une authentification réussie du partenaire (facultatif).

- **Type**: API key
- **Nom du paramètre de clé d'API :**: partener-key
- **Location**: HTTP header
