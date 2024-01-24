import csv
f1=open('names.csv','r')
row=csv.reader(f1)

for i in row:
    print(i)