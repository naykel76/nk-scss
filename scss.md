# SCSS Notes and How To's


`#{}` allows for a variable 

## Creating and Using Mixins

Create the mixin and declare the parameters to be passed `@mixin myMixin($param1, $param2, $param3){}`. Set any default values with a colon. `{$param2, $param1: value}`.

**NOTE:** required parameters must precede optional parameters.

```
@mixin myMixin($color, $padding, $border-color) {
  color: $color;
  padding: $padding;
  border: 1px solid $border-color;
}
```

Call the mixin using with `@include myMixin();` setting the parameter values, or leaving blank to use defaults.
```
.myMixin{
  @include myMixin(#333, 1rem);
}
```

## Using the @extend method

The `@extend` directive telling Sass that one selector should inherit the styles of another selector. This does not mean that all the styles will be added to the new class doubling up on code. The new class is added to the existing one.

This is useful to create variants. For example rather than stacking classes uk-btn, uk-button and btn. I can create the my btn class and extend it to the uk- variants.

```
.myBox {
  color: #333;
  padding: 1rem;
  border: 1px solid #afafaf;
}

.myBox-primary {
  @extend .myBox
  background: #6f46df;
}
```

**Outputs**
```
.myBox, .myBox-primary {
  color: #333;
  padding: 1rem;
  border: 1px solid #afafaf;
}

.myBox-primary {
  background: #6f46df;
}
```

## for loop example
h1 {font-size: $h1-font-size;}
h2 {font-size: $h2-font-size;}
h3 {font-size: $h3-font-size;}
h4 {font-size: $h4-font-size;}
h5 {font-size: $h5-font-size;}
h6 {font-size: $h6-font-size;}

@for $size from 1 through length($heading-sizes) {
	h#{$size} {
		font-size: nth($heading-sizes, $size)
	}
}


## Evolution of creating a button class

### Initial setup using @extend
```
.btn {
  display: inline-block;
  font-size: 1rem;
  padding: 0.375rem 0.75rem;
  border-radius: 0.25rem;
  white-space: nowrap;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  border: none;
}

.btn-primary {
  @extend .btn;
  background: $primary;
  color: setTextColor($primary);
}

.btn-secondary {
  @extend .btn;
  background: $secondary;
  color: setTextColor($secondary);
}

.btn-danger {
  @extend .btn;
  background: $danger;
  color: setTextColor($danger);
}

.btn-success {
  @extend .btn;
  background: $success;
  color: setTextColor($success);
}
```
### Using @each to dynamically create buttons from a list
```
$btn-names: 'primary', 'secondary', 'danger', 'success';
$btn-backgrounds: $primary, $secondary, $danger, $success;

@each $name in $btn-names {

  $i: index($btn-names, $name); // align index number 1-1, 2-2 etc

  .btn-#{$name} {
    @extend .btn;
    background-color: nth($btn-backgrounds, $i);
    color: setTextColor($primary);
  }
}

.btn {
  display: inline-block;
  font-size: 1rem;
  padding: 0.375rem 0.75rem;
  border-radius: 0.25rem;
  white-space: nowrap;
  text-align: center;
  vertical-align: middle;
  user-select: none;
  border: none;
}
```