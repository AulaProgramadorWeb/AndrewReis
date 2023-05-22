salario = float(input ("Digite o valor do salário: "))
desconto = float(salario * 0.11)
val_final = float(salario - desconto)
if (desconto < 318.20):
    print ("O seu sálario é {}. Com o desconto de {} o valor final fica {}".format(salario,desconto,val_final))
else:
    print("Seu salário é {}. Com o desconto máximo de 318,20, o valor final fica {}".format(salario,salario - 318.20))