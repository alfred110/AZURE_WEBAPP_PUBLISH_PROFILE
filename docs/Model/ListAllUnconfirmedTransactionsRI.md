# # ListAllUnconfirmedTransactionsRI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipients** | [**\CryptoAPIs\Model\ListUnconfirmedTransactionsByAddressRIRecipients[]**](ListUnconfirmedTransactionsByAddressRIRecipients.md) | Represents a list of recipient addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**senders** | [**\CryptoAPIs\Model\ListUnconfirmedTransactionsByAddressRISenders[]**](ListUnconfirmedTransactionsByAddressRISenders.md) | Represents a list of sender addresses with the respective amounts. In account-based protocols like Ethereum there is only one address in this list. |
**timestamp** | **int** | Defines the exact date/time in Unix Timestamp when this transaction was mined, confirmed or first seen in Mempool, if it is unconfirmed. |
**transaction_id** | **string** | Represents the unique identifier of a transaction, i.e. it could be &#x60;transactionId&#x60; in UTXO-based protocols like Bitcoin, and transaction &#x60;hash&#x60; in Ethereum blockchain. |
**blockchain_specific** | [**\CryptoAPIs\Model\ListAllUnconfirmedTransactionsRIBS**](ListAllUnconfirmedTransactionsRIBS.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
