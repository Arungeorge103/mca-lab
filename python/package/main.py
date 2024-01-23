from graphics import rect
l=int(input("Enter the lenghth of the rectangle:"))
b=int(input("Enter the breadth of the rectangle:"))
rect.area(l,b)
rect.perimeter(l,b)

from graphics import circle
r=int(input("Enter the radiusn of the circle;"))
circle.area(r)
circle.circumferance(r)


from graphics.graphics_3d import cuboid
l=int(input("Enter the length of the cuboid:"))
b=int(input("Enter the breadth of the cuboid:"))
h=int(input("Enter the height of the cuboid:"))
cuboid.area(l,b,h)
cuboid.peri(l,b,h)