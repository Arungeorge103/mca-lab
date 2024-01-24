dict1={}
n=int(input("Enter the elemnts in the dictionary:"))
for i in range(n):
    key=input("Enter the key :")
    value=input("Enter the value:")
    dict1[key]=value
sorted_dict=sorted(dict1.value(),reverse =True)
print("\nThe sorted dictionary is:\n",sorted_dict)
