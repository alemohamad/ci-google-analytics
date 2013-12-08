# CodeIgniter Helper: Google Analytics

**ci-google-analytics**

## About this library

This CodeIgniter's Helper is used to generates the Google Analytics initial code, and also add tracking events in DOM elements.

Its usage is recommended for CodeIgniter 2 or greater.

## Usage

```php
$this->load->helper('google_analytics');

// it's recommended to add this code just before the closing body tag in the layout
echo initGA('UA-XXXXXXXX-X');
```

If you want to track an event on a link, you can add the method as follows:

```php
// trackEventGA(category, action, label)
<a href="#" <?php echo trackEventGA("Material", "Download", "Some promotional material"); ?>>Link to track</a>
```

![Ale Mohamad](http://alemohamad.com/github/logo2012am.png)