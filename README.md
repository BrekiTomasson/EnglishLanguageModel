# English Language Model

## Introduction

This project aims to create a model of the English language which can be used in PHP projects dealing with Machine
Learning, especially that of the Natural Language Processing variety. The goals of the project include, but are not
limited to:

- Being able to provide synonyms of various word types.
- Being able to give the correct plural or singular of a noun.
- Being able to understand sentence structure.
- Being able to generate novel sentences based on specific input.

These are lofty goals, to be sure, and achieving perfect results in all of them is not likely, as the various
problems involved in Natural Language Processing are still giving even the most skilled scientists of the field
headaches. However, I believe this project can be a good step on the way for providing a framework for PHP devs
interested in Natural Language Processing.

## Usage

As the project is still in its very earliest days, the ways that it can be used are still not decided. This
section will be improved and expanded upon in the future. For now, reading the `CHANGELOG.md` document is the
best way to keep track of the project as it continues to grow and develop.

## Limitations, Constraints and Dependencies

We try to make this project as stand-alone as possible, as any third-party requirement adds complexity that
may or may not break in the future. However, we do require a `PHP` version of 7.4 or greater, as the project
was developed using the [typed properties](https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.core.typed-properties) 
and [arrow functions](https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.core.arrow-functions) that it introduced.

In the near future, it is also likely that additional third parties will be introduced for data storage, as it
is quite likely we will need to include dictionaries, thesauruses and other word lists so that the various parts
of the project are able to do their job properly. These may come in various forms, such as Composer libraries
by other people, embedded SQLite databases, online API that are called on-demand, etc. As this is (still) a
future concern, more information on these dependencies and limitations will be added to this section once we
know more about them.

## Development and Pull Requests

We welcome any and all feedback and help that the community can provide. In order to streamline the process,
we ask that any pull request made towards the project fulfills the following criteria:

- Does not break any current public methods.
- Has a complete set of (passing) tests for both internal and external methods added or changed.
- Follows the naming conventions and formatting of the project.

More information about this can be found in the file `docs/development.md`.

## Thanks and Acknowledgements

Anything good that comes of this library should be understood as only having been made possible because of
how we stood on the shoulders of giants. We have drawn great inspiration and understanding from the work
of others; this project would not have been possible without the great contributions to the field from
tools and projects such as:

- [NlpTools](http://php-nlp-tools.com) - A PHP library for natural language processing, offering text
  classification, clustering, tokenizing, stemming, etc.
- [PHP Text Analysis](https://github.com/yooper/php-text-analysis) - A PHP library that can perform a number of
  tasks, including document classification, frequency analysis, tokenization, stemming, etc.
- [The Natural Language Toolkit](http://www.nltk.org) - A library for building Python programs that work with
  human language data.
- [The Apache OpenNLP Library](http://opennlp.apache.org) - A library for building Java programs that greatly
  assists with machine learning for the processing of natural language processing tasks.
- [CoreNLP](https://stanfordnlp.github.io/CoreNLP/) - Stanford's Java library, offering linguistic annotation,
  part of speech analysis, coreference, sentiment, relations and more.
- [The Stanford Parser](https://nlp.stanford.edu/software/lex-parser.shtml) - Stanford's natural language parser,
  a Java library that works out the grammatical structure of sentences, including phrases, subjects and objects.
- [KenLM Language Model Toolkit](https://kheafield.com/code/kenlm/) - A library that implements data structures
  for efficient language model queries.
- [Kylm - The Kyoto Language Modeling Toolkit](http://www.phontron.com/kylm/) - Another language modeling toolkit,
  written in Java.
- [The Berkely Parser](https://github.com/slavpetrov/berkeleyparser) - A parser of written language that can
  generate k-best lists, binarized and/or annotated trees, tokenize input and more.

## Licence and Copyright

This project is developed under the MIT License. Feel free to use it in your own projects without attribution,
fork it and work on it to your heart's content, etc. However, if you make any significant improvements or find
faults in it, please pay it forward to the community by opening a pull request back to the original project, so
that others can benefit from your work as well.
