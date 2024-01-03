# CHANGELOG

### v.1.0.25
* Base class renamed
* Added current library versioning to Base class

### v.1.0.24
* Added nonTaxablePrice, productGroupID, productBrandID properties to SaleDocumentRow model

### v.1.0.23
* Added barcode property to SaleDocumentRow model

### v.1.0.22
* LOG_DEBUG level changed to LOG_REQUEST and LOG_RESPONSE levels 

### v.1.0.21
* Bugfix with date format in log

### v.1.0.20
* Added setter/getter for reconnect attempts

### v.1.0.19
* Added reconnect attempt for all requests

### v.1.0.18
* Added reconnection if session expired

### v.1.0.17
* Improved working keepalive

### v.1.0.16
* Preventing internal pointer in preparing nested fields

### v.1.0.15
* Improved error reporting

### v.1.0.14
* Method getProductStocks() renamed to getProductStock() like as api method

### v.1.0.13
* Added phpdoc for warehouses property in product model
* Added InventoryRegistrationRow and InventoryWriteOffRow models
* Bugfix in saved fields in InventoryTransferRow model

### v.1.0.12
* Fixed auto-pager in collections

### v.1.0.11
* Added models for InventoryTransfer api method

### v1.0.10
* Added models for getInvoicePaymentTypes api method

### v1.0.9
* Added models for ProductUnit api method

### v1.0.8
* Added log forwarding with callback

### v1.0.7
* Improved working with session and keepalive

### v1.0.6
* Added public method getKeepalive() for session validation

### v1.0.5
* Improved session keep-alive

### v1.0.4
* Added session keep-alive

### v1.0.3
* Added model for getSessionKeyInfo api method

### v1.0.2
* Added model for getAddressTypes api method

### v1.0.1
* Logging improved

### v1.0.0
* Added API-wide logging
* Initial commit