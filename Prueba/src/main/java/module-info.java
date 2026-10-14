module com.example.prueba {
    requires javafx.controls;
    requires javafx.fxml;

    requires org.controlsfx.controls;
    requires com.dlsc.formsfx;

    opens com.example.prueba to javafx.fxml;
    exports com.example.prueba;
}