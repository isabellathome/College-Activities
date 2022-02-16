dia = int(input('Quantos dias alugados? '))
km = float(input('Quantos Km rodados? '))
# valordia = dia * 60
# valorkm = km * 0.15
# preco = valordia + valorkm
preco = (dia * 60) + (km * 0.15)
print('O total a pagar é de R${:.2f}'.format(preco))
