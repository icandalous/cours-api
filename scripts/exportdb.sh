#!/usr/bin/env bash
mysqldump --user=homestead --password=secret coursdb > "../db/coursdb.sql"