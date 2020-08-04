from datetime import date
#import mariadb
#import sys

#try:
#    conn = mariadb.connect(
#        user="db_user",
#        password="db_user_passwd",
#        host="192.0.2.1",
#        port=3306,
#        database="employees"

#    )
#except mariadb.Error as e:
#    print(f"Error connecting to MariaDB Platform: {e}")
#    sys.exit(1)

# Get Cursor
#cur = conn.cursor()

today = date.today()

getTexts = open(f'texts/{today}.txt', 'r')
text = getTexts.read()
print(text)

#try:
#  cur.execute(
#    "INSERT INTO news (today,headline,maintext) VALUES (?, ?, ?)#", (Date, Headline, Maintext))
#except mariadb.Error as e:
#    print(f"Error: {e}")
