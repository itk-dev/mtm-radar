#!/usr/bin/env bash

mkdir -p dist
scss --sourcemap=none src/easyadmin.scss dist/easyadmin.css
scss --sourcemap=none src/survey.scss dist/survey.css

