
use line height instead of height for consistency between .btn and controls.

## Equal height input and submit button
First of all it's good to apply the exact same things to both the input field and the submit button. `padding`, `font-family`, `font-size`, you name it.

Second, an `<input type="submit">` button has a border by default. Setting the border to 0 to remove it but this will cause different height elements. So you should add a transparent border. That way the height will be the same but you don't have to set the color a second time.