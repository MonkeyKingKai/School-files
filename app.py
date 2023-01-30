import sqlite3

#connects to database called "data.db" which is automatically made once u run
connect= sqlite3.connect('data.db') 
#Drops table if the table customer already exists
connect.execute("DROP TABLE IF EXITS CUSTOMER")
#Makes a table
connect.execute('''CREATE TABLE CUSTOMER
        # (ID INT PRIMARY KEY NOT NULL,
        #NAME TEXT NOT NULL,
        #AGE INT NOT NULL);''')


connect.execute("INSERT INTO CUSTOMER (ID,NAME,AGE) VALUES (1,'Kai',18) ")
connect.execute("INSERT INTO CUSTOMER (ID,NAME,AGE) VALUES (2,'Bye',5) ")


all_data = connect.execute(''' SELECT * FROM CUSTOMER ''')
for  row in all_data:
    print(row)

connect.close()
