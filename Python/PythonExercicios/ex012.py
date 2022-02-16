valor = float(input('Qual é o valor do produto? R$'))
# desconto = valor * 0.05  Pode fazer desses dois jeitos
# preco = valor - desconto
novo = valor - (valor * 5 / 100)
print("O produto que custavo R${:.2f}, na promoção de 5% vai custar R${:.2f}".format(valor, novo))
