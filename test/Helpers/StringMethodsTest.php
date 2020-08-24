<?php

namespace EnglishLanguageModelTest\Helpers;

// This file contains tests for the String Helper methods defined in src/Helpers/StringMethods.php.

class StringMethodsTest extends \EnglishLanguageModelTest\TestCase
{

    public function testStringContains() : void
    {
        $longString = 'This is a long string which we will be comparing against.';
        $matchingCase = 'long string';
        $mismatchingCase = 'Long strING';
        $notMatching = 'Netherite Sword';

        // Matching case strings pass.
        self::assertTrue(\str_contains($longString, $matchingCase));

        // Mismatching case strings fail by default even when characters are the same.
        self::assertFalse(\str_contains($longString, $mismatchingCase));

        // Mismatching case passes with third argument.
        self::assertTrue(\str_contains($longString, $mismatchingCase, false));

        // Non-matching strings fail by default.
        self::assertFalse(\str_contains($longString, $notMatching));

        // Non-matching strings continue to fail even when case-insensitive.
        self::assertFalse(\str_contains($longString, $notMatching, false));

    }

}
