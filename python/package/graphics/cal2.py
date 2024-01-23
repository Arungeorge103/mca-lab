def calculator():
    result = 0
    
    while True:
        print("\n1. Addition\n2. Subtraction\n3. Multiplication\n4. Division\n5. Exit")
        choice = input("Enter your choice (1-5): ")

        if choice == '5':
            print("Exiting the calculator.")
            break

        if result == 0:
            operand1 = float(input("Enter the first operand: "))
        else:
            operand1 = result

        operand2 = float(input("Enter the second operand: "))

        if choice == '1':
            result = operand1 + operand2
        elif choice == '2':
            result = operand1 - operand2
        elif choice == '3':
            result = operand1 * operand2
        elif choice == '4':
            if operand2 != 0:
                result = operand1 / operand2
            else:
                print("Error: Cannot divide by zero.")
        else:
            print("Invalid choice. Please enter a number between 1 and 5.")

        print("Result is:", result)

if __name__ == "__main__":
    calculator()
