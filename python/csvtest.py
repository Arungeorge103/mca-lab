import csv
f=open('names.csv','w',newline='')
n=int(input("Enter the number of items:"))
for i in range(n):
    name=input("Enter the name:")
    age=int(input("Enter the age:"))
    row=(name,age)
    header=(name,age)
    writer=csv.writer(f)
    writer.writerow(row)
f1=open('names.csv','r')
r=csv.reader(f1)

for i in r:
    print(i)
    

f.close()
