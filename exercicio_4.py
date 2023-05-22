idade = int(input ("Qual sua idade? "))
if (idade <5):
    print ("Você não pode participar da competição ainda bebê")
elif idade >= 5 and idade <= 7:
    print ("Você pode participar da competição na categoria Infantil A")
elif idade >= 8 and idade <= 10:
    print ("Você pode participar da competição na categoria Infantil B")
elif idade >= 11 and idade <= 13:
    print ("Você pode participar da competição na categoria Juvenil A")
elif idade >= 14:
    print ("Você pode participar da competição na categoria Senior")
else :
    print ("Valor invalido")