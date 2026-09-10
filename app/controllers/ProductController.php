<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('ProductModel');
    }

    public function index()
    {
        $this->call->view('products/index', [
            'products' => $this->ProductModel->getAll(),
        ]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->ProductModel->create($this->productData());
            redirect('products');
        }

        $this->call->view('products/create');
    }

    public function edit($id)
    {
        if (!ctype_digit((string) $id) || (int) $id < 1) {
            redirect('products');
        }

        $product = $this->ProductModel->getById($id);

        if (!$product) {
            redirect('products');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->ProductModel->updateProduct($id, $this->productData());
            redirect('products');
        }

        $this->call->view('products/edit', ['product' => $product]);
    }

    public function delete($id)
    {
        if (!ctype_digit((string) $id) || (int) $id < 1) {
            redirect('products');
        }

        $this->ProductModel->deleteProduct($id);
        redirect('products');
    }

    private function productData()
    {
        $data = $this->io->post();

        return [
            'product_name' => $data['product_name'] ?? '',
            'description' => $data['description'] ?? null,
            'price' => $data['price'] ?? 0,
            'quantity' => $data['quantity'] ?? 0,
        ];
    }
}