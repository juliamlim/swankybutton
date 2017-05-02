# Swanky Button
A swanky button template for you to add to any page! Just add the `swanky-button` file to your site and link it by typing:
```html
<head>
  ...
  <link href="swanky-button/swanky-button.php" rel="import"/>
  <script src="swanky-button/swanky-button.js" type="text/javascript"></script>
</head>
```
## Make a new button
To create a new swanky button on your page add this element anywhere!
```xml
<!DOCTYPE html>
<html>
  ...
    <swanky-button>
        <p slot="swanky-text">&#9996;</p>
    </swanky-button>
  ...
</html>
```
### Changing the color
If you want to change the colors of all the buttons on the site open `swanky-button/swanky-button.php` and change the color and text php variables.
