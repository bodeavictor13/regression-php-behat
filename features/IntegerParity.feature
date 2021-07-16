Feature: Test whether an integer is even or odd.

    Scenario Outline: The integer is even or odd.
        Given the integer "<integer>"
        When the calculator is run
        Then we will get an "<result>"

    Examples:
        | integer | result |
        | 3       | odd    |
        | 4       | even   |
        | 7       | even    |
        | 11      | odd    |
        | 26      | odd   |
        | 59      | odd    |