SELECT * from pedidos;

SELECT * from itenspedidos;

-- Calculando o total das vendas diarias
SELECT DATE(datahorapedido) AS Dia, SUM(ip.precounitario) as FaturamentoDiario 
from pedidos p
join itenspedidos ip
on p.id = ip.idpedido
GROUP BY Dia
ORDER BY Dia;

-- Criando a tabela de Faturamentodiario

CREATE TABLE Faturamentodiario (
   Dia DATE,
   FaturamentoTotal DECIMAL(10, 2) 
);

-- Criando a TRIGGER CalculaFaturamentoDiario

CREATE TRIGGER CalculaFaturamentoDiario
AFTER INSERT ON itenspedidos
FOR EACH ROW 
BEGIN
DELETE FROM Faturamentodiario;
INSERT INTO Faturamentodiario (Dia, faturamentototal)
SELECT DATE(datahorapedido) AS Dia, SUM(ip.precounitario) as FaturamentoDiario 
from pedidos p
join itenspedidos ip
on p.id = ip.idpedido
GROUP BY Dia
ORDER BY Dia;
END;


SELECT * from Faturamentodiario;

-- Calculando o faturamento diario dos pedidos existentes

INSERT INTO Faturamentodiario (Dia, faturamentototal)
SELECT DATE(datahorapedido) AS Dia, SUM(ip.precounitario) as FaturamentoDiario 
from pedidos p
join itenspedidos ip
on p.id = ip.idpedido
GROUP BY Dia
ORDER BY Dia;



















