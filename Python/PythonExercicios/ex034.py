salario = float(input('Qual é o sálario do funcionário? R$'))
if salario > 1250.00:
    aumento = salario * (10 / 100)
else:
    aumento = salario * (15 / 100)
salariofinal = salario + aumento
print('Quem ganhava R${} passa a ganhar R${} agora.'.format(salario, salariofinal))
