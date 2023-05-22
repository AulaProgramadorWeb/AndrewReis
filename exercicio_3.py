euro = float(input ("Digite o valor do euro: "))
dolar = float(input ("Digite o valor do dolar: "))
real = float(input ("Digite o valor do real: "))
opt_1 = int(input ("Qual a moeda que será convertida?" "\n Digite 1 para REAL" "\n Digite 2 para DOLAR" "\n Digite 3 para EURO:" "\n"))
opt_2 = int(input ("Para a moeda que será a conversão?" "\n Digite 1 para REAL" "\n Digite 2 para DOLAR" "\n Digite 3 para EURO:" "\n"))
val_conv = float(input ("Digite o valor para fazer a conversão: "))
if (opt_1 == 1) and (opt_2 == 2):
    print ("O valor original em reais de {}, com a cotação atual de {}, convertido para dólar ficará {}".format(val_conv, dolar, val_conv*dolar))
elif (opt_1 == 1) and (opt_2 == 3):
    print ("O valor original em reais de {},  com a cotação atual de {}, convertido para euro ficará {}".format(val_conv, euro ,val_conv*euro))
elif (opt_1 == 2) and (opt_2 == 1):
    print ("O valor original em dólar de {},  com a cotação atual de {}, convertido para reais ficará {}".format(val_conv, real, val_conv*real))
elif (opt_1 == 2) and (opt_2 == 3):
    print ("O valor original em dólar de {},  com a cotação atual de {}, convertido para euro ficará {}".format(val_conv, euro, val_conv*euro))
elif (opt_1 == 3) and (opt_2 == 1):
    print ("O valor original em euro de {},  com a cotação atual de {}, convertido para reais ficará {}".format(val_conv, real, val_conv*real))
elif (opt_1 == 3) and (opt_2 == 2):
    print ("O valor original em euro de {},  com a cotação atual de {}, convertido para dolar ficará {}".format(val_conv, dolar, val_conv*dolar))
else:
    print ("Valor inválido")