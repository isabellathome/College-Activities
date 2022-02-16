print('-=-' * 15)
print('Analisador de Triângulos')
print('-=-' * 15)
sega = float(input('Primeiro Segmento: '))
segb = float(input('Segundo Segmento: '))
segc = float(input('Terceiro Segmento: '))
if sega < segb + segc and segb < sega + segc and segc < sega + segb:
    print('Os segmentos acima PODEM FORMAR um triângulo!')
else:
    print('Os segmenstos acima NÃO PODEM FORMAR um triângulo!')
