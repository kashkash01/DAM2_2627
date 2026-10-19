module com.example.temaaaaaa2 {
    requires javafx.controls;
    requires javafx.fxml;

    requires org.controlsfx.controls;
    requires com.dlsc.formsfx;

    opens com.example.temaaaaaa2 to javafx.fxml;
    exports com.example.temaaaaaa2;
}