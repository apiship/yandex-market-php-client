# # CalculateTariffsOfferDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**category_id** | **int** | Идентификатор категории товара на Маркете.  Для расчета стоимости услуг необходимо указать идентификатор листовой категории товара — той, которая не имеет дочерних категорий.  Чтобы узнать идентификатор категории, к которой относится товар, воспользуйтесь запросом [POST categories/tree](../../reference/categories/getCategoriesTree.md). |
**price** | **float** | Цена на товар в рублях. |
**length** | **float** | Длина товара в сантиметрах. |
**width** | **float** | Ширина товара в сантиметрах. |
**height** | **float** | Высота товара в сантиметрах. |
**weight** | **float** | Вес товара в килограммах. |
**quantity** | **int** | Квант продажи — количество единиц товара в одном товарном предложении. | [optional] [default to 1]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
