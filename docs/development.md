# Development

Help from the community is always welcome. As stated in `README.md`, we ask that any pull requests made towards
this project fulfill these three criteria:

- Does not break any current public methods.
- Has a complete set of (passing) tests for both internal and external methods added or changed.
- Follows the naming conventions and formatting of the project.

Some details on this follow:

## Do not Any Break Current Public Methods

`todo`.

## Have Passing Tests

## Follow Naming Convention

The naming convention of the project are quite simple and should be familiar to most PHP developers, as they
have become standard for many projects. They are, in fact, pretty much in line with the PSR-2 standards:

- Class names are named in `StudlyCaps` according to what the class **is or represents**, not what it does. This
  means a class whose job is to send notifications can be called `NotificationSender`, not `SendNotification`.
- Class names should be understandable even without the help of the namespace. If there is a class whose job
  is to parse noun phrases, naming it `[...]\Parsers\Phrases\Noun` is unacceptable. `[...]\Parsers\NounPhraseParser`
  is much better, despite the duplication of the word "Parser" in the full class name.
- Class names must follow PSR-4, meaning the full namespace of the class must match the full path name of the
  folder structure for the class.
- Class methods are named in `camelCaseLikeThis` according to what the method **does** and should therefore be
  expressed as a verb phrase. `getNameList()`, not `names()`. `calculateSentenceLength()`, not `length()`.
- Class properties/variables are also named in `camelCaseLikeThis` and should express what the property contains.
  It should also be in a form that is appropriate for the data type it contains, so that accessing it makes
  semantic sense. If we have a class called `Sentence`, and it - during processing - puts the subject, object and
  verb into public properties, `$sentence->verb` would be a reasonable name.
- Class Constants should be avoided if possible, but named in `UPPERCASE` and express what they contain. Words
  can be separated by underscores, such as `MAXIMUM_LENGTH`.
- Global "helper" methods are named in `snake_case_like_this` according to what the method **does**.
- Namespaces are named in `StudlyCaps` and should follow appropriate plural noun structure wherever possible.
- Except for underscores in global methods, the only permitted characters in any name is `a-z`, `A-Z` and `0-9`.
- File names must match the class it contains, including casing. The class `ErrorHandler` should reside in
  the file `ErrorHandler.php`.
- Unit Tests must match the name of the class which is tested, with `Test.php` added at the end. If we were
  writing tests for the `ErrorHandler` class, those tests would be in `ErrorHandlerTest.php`.

In all names, whether that be classes, namespaces, methods or variables, the names should be in English and
avoid abbreviations wherever possible. If an abbreviation is required, capitalization should be done as if it were
a normal word. For example, if we had a class handling API-related events, its name should be something like
`ApiEventHandler`, not `APIEventHandler`.

Avoiding abbreviations wherever possible should also be encouraged as regarding common shortened forms of
words. For example, naming a variable `$minSize` should be avoided, as the 'real' name is `$minimumSize`. 
Similarly, `$stringLength` is better than `$strLen` and `$arrayArguments` is better than `$arrArg`.

First and foremost, however, ensure that any name, whether it be a class, method or variable, is as
*unambiguous* as possible. If provided nothing but the single row in which it is declared or used, it should
be obvious what to expect from it. This should not be read as a license to be overly detailed in your naming,
however, sometimes `$itemPrice` is a better option than `$priceOfSelectedItemInUnitedStatesDollars`.

## Follow Formatting and Syntax

The following rules should be understood and followed in any code being submitted to the project:

- Code lines do not have a strict max length, but *should* be kept under 100 characters, if possible, for the sake
  of readability. While writing clever one-liners is always pleasing, remember that any line of code is going to
  be read far more often than written, so make sure that your code is easy to read for other developers.
- Tabs should be avoided at all costs, with indentation done using four spaces instead. 
- File encoding should be UTF-8 without byte order marks (BOM).
- Line endings should be `chr(10)` or LF. This is commonly called "Unix style", and differs from the Windows style
  (CRLF) or the classic Mac style (CR).
- Referring to classes in other namespaces should be done using the `use` statement at the top of the file, after
  the namespace declaration. If there is a conflict between two names, then **both** should be given alternate
  names using the `as` keyword. There should only be one `use` statement per line, and they should be ordered
  alphabetically.
- A file should declare new symbols (such as classes, functions, and constants) or execute logic with side effects,
  but should never do both.

Additional formatting guidelines are enforced via a number of rules defined by `PHP-CS-Fixer`. 
