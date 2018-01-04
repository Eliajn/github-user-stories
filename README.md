# GitHub Users Story

This project translates User Stories from simple text in fields to GitHub milestones and issues. Milestones are created from Features and issues from Scenarios with the label `scenario`.

## Prerequisite

- PHP 5+
- [Composer](https://getcomposer.org/)
- A server to run PHP scripts (Apache, Nginx with PHP FPM, XAMPP, etc.)

## Installation

- Download or clone this project
- Run `composer install`
- Launch the server with the root file being `index.php`

## Configuration

- Open `save.php` and fill the following variables
  - `$owner` is the GitHub repo's owner
  - `$repo` is the repository where you'd like to create the milestones and issues
  - `$username` your credential username
  - `$password` your credential password

## Usage

- Open the page (index.php) and fill the fields for features and scenarios
- Save and visit the repository's issues to see the results
