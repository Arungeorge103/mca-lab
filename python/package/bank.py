class Bank:
    def __init__(self,n,name,type):
        self.number=n
        self.name=name
        self.type=type
        self.balance=0

    def deposit(self,amount):
        self.balance=self.balance+amount
        print(amount," Deposited!")
        print("Balance:",self.balance)

    def withdraw(self,amount):
        if(amount>self.balance):
            print("\nInsufficient Balance")
        else:
            print(amount, "Withdrawn!!")
            self.balance=self.balance-amount
            print("Remaining Balance:",self.balance)
   
    def details(self):
        print(".....Details of the Account Holder.....")
        print("\nAccount Number:",self.number)
        print("\nName:",self.name)
        print("\nAccount Type:",self.type)
        print("\nAccount Balance:",self.balance)

n=int(input("Enter the Account Number:"))
name=input("Enter the Name:")
type=input("Enter the Account Type:")
b=Bank(n,name,type)

ch=1

while(ch<4):
    print("\n1.Details\n2.Withdraw\n3.Deposit\n4.Exit\n............")
    ch=int(input("Enter your choice:"))
    if(ch==1):
        b.details()
    elif(ch==2):
        b.withdraw(int(input("Enter the Amount to Withdraw:")))
    elif(ch==3):
        b.deposit(int(input("Enter the Amount to Deposit:")))





