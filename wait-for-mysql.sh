#!/bin/sh

echo "⌛ Waiting for MySQL to be ready..."

until mysql -h $DB_HOST -P $DB_PORT -u $DB_USERNAME -p$DB_PASSWORD -e "select 1" > /dev/null 2>&1; do
  echo "⏳ Still waiting for MySQL..."
  sleep 2
done

echo "✅ MySQL is ready!"
