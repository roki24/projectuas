<?php namespace App\Controllers;

use App\Models\MotorModel;
use App\Models\CartModel;
use CodeIgniter\Controller;

class CartController extends Controller
{
    protected $motorModel;
    protected $cartModel;

    public function __construct()
    {
        // Pakai model yang sudah kamu punya
        $this->motorModel = new MotorModel();
        $this->cartModel  = new CartModel();
    }

    public function index()
    {
        $data['cart']  = $this->cartModel->getCart();
        $data['total'] = array_reduce(
            $data['cart'],
            fn($sum, $item) => $sum + ($item['harga'] * $item['qty']),
            0
        );
        return view('cart/index', $data);
    }

    public function add($id_motor)
    {
        $motor = $this->motorModel->find($id_motor);
        if ($motor) {
            $this->cartModel->addItem([
                'id_motor' => $motor['id_motor'],
                'nama'     => $motor['merk'] . ' ' . $motor['tipe'],
                'harga'    => $motor['harga']
            ]);
            return redirect()->back()->with('msg', 'Motor ditambahkan ke keranjang!');
        }
        throw new \CodeIgniter\Exceptions\PageNotFoundException();
    }

    public function remove($id_motor)
    {
        $this->cartModel->removeItem($id_motor);
        return redirect()->back()->with('msg', 'Item dihapus dari keranjang.');
    }

    public function clear()
    {
        $this->cartModel->clearCart();
        return redirect()->back()->with('msg', 'Keranjang dikosongkan.');
    }
}
