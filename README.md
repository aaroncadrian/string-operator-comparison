# String Operator Comparison


## Installation

```
composer require aaroncadrian/string-operator-comparison
```

## Quick Usage

### Helper Function

```
return compare(1, '<' 2); // returns true
```

```
return compare(1, '>=' 2); // returns false
```

### Static Method

```
use AaronAdrian\StringOperatorComparison\Comparison;
 
// ...

return Comparison::make(1, '<', 2); // returns true
```

## Supported String Operators

- <
- <=
- >
- >=
- =
- ==
- ===
- <>
- !=
- !==
