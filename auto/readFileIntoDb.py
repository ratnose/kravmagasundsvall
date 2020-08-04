from datetime import date
import sys
import pymysql.cursors

# Connect to the database
connection = pymysql.connect(host='localhost',
                             user='kravmaga',
                             password='dont-punch-your-friends',
                             db='kms',
                             charset='utf8',
                             cursorclass=pymysql.cursors.DictCursor)


today = date.today()

getTexts = open(f'texts/{today}.txt', 'r')
text = getTexts.read()
print(text)

#try:
#  cur.execute(
#    "INSERT INTO news (today,headline,maintext) VALUES (?, ?, ?)#", (Date, Headline, Maintext))
#except mariadb.Error as e:
#    print(f"Error: {e}")
