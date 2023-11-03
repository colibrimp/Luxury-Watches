<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    //2
    public function basket()
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = Order::findOrFail($orderId);
        }
        return view('basket.basket', compact('order'));
    }

//4
    public function basketOrder()
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('basket.order', compact('order'));
    }


//   1 Добавление товара в корзину
    public function basketAdd($product_id)
    {
//        в сессию ложим ключ order_id
        $orderId = session('orderId');
//        если у нас из нул то мы должны создать заказ
        if (is_null($orderId)) {
            $order = Order::create();
//          создать заказ и положить в сессиию
            session(['orderId' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }

//      проверяем ложит товар в корзину или нет
//      dump($order);

        // Колонка количество товара count. Добавление товара.
        // В модели ордер дописываем ->withPivot('count')->withTimestamps();
        if ($order->products->contains($product_id)) {
//            если товар в корзине увеличить count
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        }else{
            //если у нас ничего нет то добавить товар в корзину
            $order->products()->attach($product_id);
        }

        //проверяем добавился продукт в таблицу order_product
//        dump($order->products);

        //надпись о добавлении товара
        $product = Product::find($product_id);
        session()->flash('success', 'Product added: ' . $product->title);

        return redirect()->route('basket');
        //при добавлении товара не будет сразу 2подряд добавлятся


    }

//  3  Удаление корзины
    public function basketRemove($product_id)
    {
        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('basket');
        }
        $order = Order::find($orderId);
//        $order->products()->detach($product_id);

//        //  Колонка количество товара count. Удаление товара.
        if ($order->products->contains($product_id)) {
            $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($product_id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
//            return redirect()->route('basket');
        }

        //Сообщение о удалении товара из корзины
        $product = Product::find($product_id);
        session()->flash('warning', 'Item removed from cart: ' . $product->title);

        return redirect()->route('basket');
    }

    //5 Confirm order: копируем из метода basketorder()
    public function basketConfirm(Request $request)
    {
        //ВАЛИДАЦИЯ
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        $orderId = session('orderId');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        //проверяем попадает ли данные
//        dd($request->all());
//
//        $order->name = $request->name;
//        $order->phone = $request->phone;
//        $order->status = 0;
//        $order->save();
//        проверяем записалось это в таблицу или нет и переносим это все в модель Order
        $success=$order->saveOrder($request->name, $request->phone);
//        session()->forget('orderId');
        //Сообщение о принятии товара на обработку
        if (isset($success)){
            session()->flash('success', 'Your order has been processed!');
        }else{
            session()->flash('warning', 'Error!');
        }

        return redirect()->route('index');
    }




}
