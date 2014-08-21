# features/homepage.feature
Feature: homepage
  Display the app homepage
  As anybody
  I need to be able to see the homepage greeting

  Scenario: Display homepage
    Given I am on "/"
    Then I should see "ArtefactLabs"
    And I should see "Hello, world!"